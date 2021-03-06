<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 */
class UserController extends AbstractApiController
{
    /**
     * Get details about the current user
     *
     * @Route("/users/me", name="users_me")
     * @Method("GET")
     *
     * @Security("has_role('ROLE_USER')")
     */
    public function getAction ()
    {
        $user = $this->getUser();

        return $this->success(
            $user,
            [
                'Default',
                'Self',
            ]
        );
    }
}
