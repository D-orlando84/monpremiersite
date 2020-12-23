<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\Authentification;
use Symfony\Component\HttpFoundation\Request;


class AuthServiceController extends AbstractController
{
    /**
     * @Route("/AuthService/index", name="Auth")
     */

    public function index(Authentification $auth, $mdpAdmin)
    {   
        //On récupère les supers variables
        $req = Request::createFromGlobals();
        //On récupère le paramètre id passé en GET
        $password = $req->request->get('password');        
        if(isset($password)) {
            $hash = $auth->hash_pwd($password);
            if($mdpAdmin == $hash) {
                echo "GOOG PASSWORD";
            } else {
                echo "BADDD ".$hash;
            }
        }
        return $this->render('/connexion/connexion.html.twig');
    }
}
