<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
		if (!$this->getUser()) {
			return $this->redirectToRoute('fos_user_security_login');
		}
        return new Response($this->renderView('AppBundle:Default:index.html.twig'));
    }
}
