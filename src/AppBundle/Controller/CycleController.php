<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Cycle;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of CyclesController
 *
 * @Route("/cycles", name="cycles_")
 *
 * @author Alsciende <alsciende@icloud.com>
 */
class CycleController extends AbstractApiController
{
    /**
     * Get all Cycles
     * @Route("", name="list")
     * @Method("GET")
     */
    public function listAction (Request $request, EntityManagerInterface $entityManager)
    {
        $this->setPublic($request);

        return $this->success(
            $entityManager
                ->getRepository(Cycle::class)
                ->findAll(),
            [
                'Default',
            ]
        );
    }
}
