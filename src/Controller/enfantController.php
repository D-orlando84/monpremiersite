<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 

class enfantController extends AbstractController
{
	/**
	* @Route("/enfant", name="enfant")
	*/
	public function enfant()
	{
		return $this->render('enfant.html.twig');
	}
}
