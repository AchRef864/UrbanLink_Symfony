<?php
// src/Security/OAuthUserProvider.php
namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthAwareUserProviderInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class OAuthUserProvider implements OAuthAwareUserProviderInterface, UserProviderInterface
{
    public function __construct(
        private EntityManagerInterface $em
    ) {}

    public function loadUserByOAuthUserResponse(UserResponseInterface $response): UserInterface
    {
        $email = $response->getEmail();
        $user = $this->em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            // Create new user
            $user = new User();
            $user->setEmail($email);
            $user->setName($response->getFirstName() . ' ' . $response->getLastName());
            $user->setRole('client');
            $user->setPassword(''); // No password for OAuth users
            $user->setPhone(''); // Set default or empty
            $user->setIsBlocked(false);

            $this->em->persist($user);
            $this->em->flush();
        }

        return $user;
    }
    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        return $this->em->getRepository(User::class)->findOneBy(['email' => $identifier]);
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByIdentifier($user->getUserIdentifier());
    }

    public function supportsClass($class): bool
    {
        return User::class === $class || is_subclass_of($class, User::class);
    }
}