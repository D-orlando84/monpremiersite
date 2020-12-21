<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LivresController extends AbstractController
{
	/**
	* @Route("/livres/{idLivre}",name="livre")
	*/
	public function test($idLivre)
	{
		//print($idLivre);
        $livre = array(1 => "Lenomdulivretest");
		return $this->render('livres/livre.html.twig', [
    		'idLivre' => $idLivre
    	]);
	}
}

