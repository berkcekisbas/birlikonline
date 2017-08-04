<?php

namespace SicilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/sicil")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SicilBundle:Default:index.html.twig');
    }

    /**
     * @Route("/arama",name="sicil_arama")
     */
    public function aramaAction()
    {
        return $this->render('SicilBundle:Default:index.html.twig');
    }
}
