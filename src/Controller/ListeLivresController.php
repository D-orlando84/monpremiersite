<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ListeLivresController extends AbstractController
{
	/**
	* @Route("/livres", name="livres_list")
	*/
	public function livre()
	{
		$livre = array(array(
			'Titre' => 'Le labyrinthe',
			'Description' => 'Description livre 1',
			'Collection' => 'Delacorte Press'),
			array(
				'Titre' => 'La terre Brulée',
				'Description' => 'Description livre 2',
				'Collection' => 'delacorte press'),
			array('Titre' => 'La braise',
			'Description' => 'Description livre 3',
			'Collection' => 'Delacorte Press'),
			);
		return $this->render('livres/listeLivres.html.twig', array('livre' => $livre));
	}
}

