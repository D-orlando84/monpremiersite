<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class dateController extends AbstractController
{
	/**
	* @Route("/macros", name="date")
	*/
	public function date()
	{
		return $this->render('macros/date.html.twig');
	}
}
