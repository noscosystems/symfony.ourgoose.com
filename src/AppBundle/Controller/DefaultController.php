<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function numberAction()
    {
    	$number = rand(0,100);

            return $this->render('AppBundle:Default:home.html.twig', array('number' => $number));
    }
}