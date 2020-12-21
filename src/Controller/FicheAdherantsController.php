<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FicheAdherantsController extends AbstractController
{
	/**
	* @Route("/adherants/fiche_adherants/{idAdherants}", name="fiche_adherants")
	*/
	public function ficheAdherants($idAdherants)
	{
		$ficheAd = array(array(
			'id'=>'0',
			'nom' => 'Ducamp',
			'prenom' => 'Orlando',
			'age' => '20 ans'),
		array(
			'id'=>'id',
			'nom' => 'paul',
			'prenom' => 'jean pierre',
			'age' => '22 ans'),
		);
		return $this->render('adherants/ficheAdherants.html.twig', ['idAdherants'=>$idAdherants, 'ficheAd' => $ficheAd]);
	}
}