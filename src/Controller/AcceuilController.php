<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AcceuilController extends AbstractController
{
	/**
	* @Route("/", name="accueil")
	*/
	public function index()
	{
		return $this->render('accueil/index.html.twig');
	}
}

