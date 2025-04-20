<?php
// src/EventSubscriber/AuthenticationSubscriber.php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AuthenticationSubscriber implements EventSubscriberInterface
{
    private UrlGeneratorInterface $urlGenerator;
    private AuthorizationCheckerInterface $authorizationChecker;

    public function __construct(
        UrlGeneratorInterface $urlGenerator,
        AuthorizationCheckerInterface $authorizationChecker
    ) {
        $this->urlGenerator = $urlGenerator;
        $this->authorizationChecker = $authorizationChecker;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => 'onSecurityInteractiveLogin',
        ];
    }

    // src/EventSubscriber/AuthenticationSubscriber.php
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event): void
    {
        $user = $event->getAuthenticationToken()->getUser();

        // Debug output
        dump('Stored Role: '.$user->getRole());
        dump('Computed Roles: ', $user->getRoles());
        dump('Requested Route: '.$event->getRequest()->getSession()->get('_security.main.target_path'));

        $route = match(strtolower($user->getRole())) {
            'admin' => 'admin_dashboard',
            'driver' => 'driver_dashboard',
            'taxi' => 'taxi_dashboard',
            'client' => 'client_dashboard',
            default => 'app_home'
        };

        dump('Determined Route: '.$route);

        $event->getRequest()->getSession()->set(
            '_security.main.target_path',
            $this->urlGenerator->generate($route)
        );

        dump('Final Redirect: '.$this->urlGenerator->generate($route));
    }

    private function getPrimaryRole(array $roles): string
    {
        // Remove ROLE_USER and sort by specificity
        $filteredRoles = array_filter($roles, fn($role) => $role !== 'ROLE_USER');

        // Order of role priority
        $rolePriority = ['ROLE_ADMIN', 'ROLE_DRIVER', 'ROLE_TAXI', 'ROLE_CLIENT'];

        foreach ($rolePriority as $role) {
            if (in_array($role, $filteredRoles)) {
                return $role;
            }
        }

        return 'ROLE_USER';
    }

    private function determineRoute(User $user): string
    {
        return match($user->getRole()) {
            'admin' => 'admin_dashboard',
            'driver' => 'driver_dashboard',
            'taxi' => 'taxi_dashboard',
            'client' => 'client_dashboard',
            default => 'app_home'
        };
    }
}