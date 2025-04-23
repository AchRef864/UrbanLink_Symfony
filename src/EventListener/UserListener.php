<?php
// src/EventListener/UserListener.php
namespace App\EventListener;

use App\Entity\User;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class UserListener
{
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        if ($entity instanceof User && !$entity->getJoiningDate()) {
            $entity->setJoiningDate(new \DateTime());
        }
    }
}