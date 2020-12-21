<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
	/**
	* @Route("/contact", name="contact_list")
	*/
	public function date()
	{
		return $this->render('contact/contact.html.twig');
	}
}

