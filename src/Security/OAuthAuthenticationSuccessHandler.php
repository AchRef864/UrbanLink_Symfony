<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use App\Entity\User;

class OAuthAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private $router;
    private $authorizationChecker;

    public function __construct(RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return new RedirectResponse($this->router->generate('app_home')); // Replace 'app_home' with your homepage route name
        }

        // Redirect based on role
        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->router->generate('admin_dashboard')); // Replace 'admin_dashboard' with your admin dashboard route name
        } elseif ($this->authorizationChecker->isGranted('ROLE_DRIVER')) {
            return new RedirectResponse($this->router->generate('driver_dashboard')); // Replace 'driver_dashboard' with your driver dashboard route name
        } elseif ($this->authorizationChecker->isGranted('ROLE_TAXI')) {
            return new RedirectResponse($this->router->generate('taxi_dashboard')); // Replace 'taxi_dashboard' with your taxi dashboard route name
        } elseif ($this->authorizationChecker->isGranted('ROLE_CLIENT')) {
            return new RedirectResponse($this->router->generate('client_dashboard')); // Replace 'client_dashboard' with your client dashboard route name
        }

        // Default redirect if no specific role is found (optional)
        return new RedirectResponse($this->router->generate('app_dashboard')); // Replace 'app_dashboard' with a default dashboard route
    }
}