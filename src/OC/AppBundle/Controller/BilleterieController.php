<?php

// src/OC/AppBundle/Controller/BilleterieController.php

namespace OC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class BilleterieController extends Controller
{
	public function indexAction()
  	{
    	return $this->render('OCAppBundle:Billeterie:index.html.twig'); 
  	}
	
	public function reservationAction()
    {
        return $this->render('OCAppBundle:Billeterie:reservation.html.twig'); 
    }

    public function resumeAction()
    {
        return $this->render('OCAppBundle:Billeterie:resume.html.twig'); 
    }

    public function valideAction()
    {
        return $this->render('OCAppBundle:Billeterie:validation.html.twig'); 
    }




}