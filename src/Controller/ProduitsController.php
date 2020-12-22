<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitsController extends AbstractController
{
	/**
	* @Route("/produit", name="liste_produit")
	*/
	public function produit()
	{
		$deo = '/public/image/deo.jpg';
		$produit = array(array(
			'nom' => 'Deodorant',
			'titre' => 'Men',
            'ean13' => '3000906789094',
            'prix' => '2€',
            'image' => 'deodorant'),
		    array(
			'nom' => 'Gel douche',
			'titre' => 'ushuaia',
            'ean13' => '2000238978564',
            'prix' => '3,50€',
            'image' => 'gel_douche'),
		    array(
			'nom' => 'Parfum',
			'titre' => 'One million',
            'ean13' => '4000239067458',
            'prix' => '50€',
            'image' => 'parfum'));

		return $this->render('produit/produit.html.twig', array('produit' => $produit));
	}
}
