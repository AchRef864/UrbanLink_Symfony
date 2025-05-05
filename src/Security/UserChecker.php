<?php

namespace App\Security;

use App\Entity\User as AppUser;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserChecker implements UserCheckerInterface
{
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }

        if ($user->isBlocked()) {
            // You might want to throw a more specific AuthenticationException here
            throw new \Exception('Your account is blocked. Please contact the administrator.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }

        // You can add additional post-authentication checks here if needed
    }

    private function isOAuthAuthentication(): bool
    {
        // Check if the current authentication is via OAuth
        $token = $this->tokenStorage->getToken();
        return $token && in_array('HWI\Bundle\OAuthBundle\Security\Core\Authentication\Token\OAuthToken', class_uses($token), true);
    }
}