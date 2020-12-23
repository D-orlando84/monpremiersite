<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\ComplexMath;

class TestServiceController extends AbstractController
{
    /**
     * @Route("/TestService/index")
     */

     public function index(ComplexMath $math)
    {
        return new Response(
            '<html><body>Test Service Mode = '.$math->getMode().'</body></html>'
        );
    }
}