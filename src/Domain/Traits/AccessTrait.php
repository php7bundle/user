<?php

namespace PhpBundle\User\Domain\Traits;

use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Security\Core\User\UserInterface;

trait AccessTrait
{

    protected function checkAuth()
    {
        $user = $this->authenticator->getUser();
        if ( ! is_object($user) || ! $user instanceof UserInterface) {
            throw new UnauthorizedHttpException('Unauthorized');
        }
    }

}