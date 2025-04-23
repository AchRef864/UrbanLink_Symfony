<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatisticsController extends AbstractController
{
    #[Route('/admin/statistics', name: 'admin_statistics')]
    public function index(UserRepository $userRepository, Request $request): Response
    {
        $show = $request->query->get('show', 'general');

        // Get all statistics data
        $totalUsers = $userRepository->count([]);
        $blockedUsers = $userRepository->count(['isBlocked' => true]);
        $activeUsers = $totalUsers - $blockedUsers;

        // Get role distribution
        $roleCounts = $userRepository->createQueryBuilder('u')
            ->select('u.role, COUNT(u.id) as count')
            ->groupBy('u.role')
            ->getQuery()
            ->getResult();

        // Format role data for chart
        $roles = [];
        $roleCountsData = [];
        foreach ($roleCounts as $roleCount) {
            $roles[] = ucfirst($roleCount['role']);
            $roleCountsData[] = $roleCount['count'];
        }

        return $this->render('profile/statistics.html.twig', [
            'show' => $show,
            'totalUsers' => $totalUsers,
            'blockedUsers' => $blockedUsers,
            'activeUsers' => $activeUsers,
            'roles' => $roles,
            'roleCounts' => $roleCountsData,
        ]);
    }
}