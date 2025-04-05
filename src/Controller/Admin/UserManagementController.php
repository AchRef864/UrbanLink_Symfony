<?php
// src/Controller/Admin/UserManagementController.php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserManagementController extends AbstractController
{
    #[Route('/manage', name: 'admin_user_manage')]
    public function manageUsers(
        Request $request,
        UserRepository $userRepository,
        PaginatorInterface $paginator
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = $this->getUserList($request, $userRepository, $paginator);

        return $this->render('admin/users/manage.html.twig', [
            'users' => $users,
            'mode' => 'manage'
        ]);
    }

    #[Route('/delete', name: 'admin_user_delete')]
    public function deleteUsers(
        Request $request,
        UserRepository $userRepository,
        PaginatorInterface $paginator
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = $this->getUserList($request, $userRepository, $paginator);

        return $this->render('admin/users/manage.html.twig', [
            'users' => $users,
            'mode' => 'delete'
        ]);
    }

    #[Route('/edit/{id}', name: 'admin_user_edit', methods: ['GET', 'POST'])]
    public function editUser(
        Request $request,
        User $user,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Prevent editing admin profiles
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $this->addFlash('error', 'Admin profiles cannot be edited from this interface');
            return $this->redirectToRoute('admin_user_delete');
        }

        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'User updated successfully');
            return $this->redirectToRoute('admin_user_delete');
        }

        return $this->render('admin/users/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/block/{id}', name: 'admin_user_block', methods: ['POST'])]
    public function blockUser(
        User $user,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('block'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsBlocked(true);
            $entityManager->flush();
            $this->addFlash('success', 'User has been blocked successfully');
        }

        return $this->redirectToRoute('admin_user_manage');
    }

    #[Route('/unblock/{id}', name: 'admin_user_unblock', methods: ['POST'])]
    public function unblockUser(
        User $user,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('unblock'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsBlocked(false);
            $entityManager->flush();
            $this->addFlash('success', 'User has been unblocked successfully');
        }

        return $this->redirectToRoute('admin_user_manage');
    }

    #[Route('/confirm-delete/{id}', name: 'admin_user_confirm_delete')]
    public function confirmDelete(User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/users/confirm_delete.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/delete/{id}', name: 'admin_user_perform_delete', methods: ['POST'])]
    public function performDelete(
        User $user,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('success', 'User deleted successfully');
        }

        return $this->redirectToRoute('admin_user_delete');
    }

    private function getUserList(
        Request $request,
        UserRepository $userRepository,
        PaginatorInterface $paginator
    ): \Knp\Component\Pager\Pagination\PaginationInterface {
        $searchTerm = $request->query->get('search');
        $roleFilter = $request->query->get('role');

        $queryBuilder = $userRepository->createQueryBuilder('u')
            ->orderBy('u.id', 'ASC');

        if ($searchTerm) {
            $queryBuilder->andWhere('u.name LIKE :search OR u.email LIKE :search')
                ->setParameter('search', '%'.$searchTerm.'%');
        }

        if ($roleFilter) {
            $queryBuilder->andWhere('u.role = :role')
                ->setParameter('role', $roleFilter);
        }

        return $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );
    }
}