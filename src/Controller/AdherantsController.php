<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdherantsController extends AbstractController
{
	/**
	* @Route("/adherants", name="adherant_list")
	*/
	public function adherants()
	{
		$adherants = array(array(
			'id'=>'0',
			'nom'=>'orlando'
		),
		array(
			'id'=>'1',
			'nom'=>'test'
		),
		);
		return $this -> render('adherants/adherants.html.twig', array('adherants'=> $adherants));
	}
}
