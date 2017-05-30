<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function indexAction()
    {
        return $this->forward('AppBundle:Default:subRequest');
    }

    /**
     * @return Response
     */
    public function subRequestAction()
    {
        $foo = null;
        $foo->bar();

        return new Response('foo');
    }

}
