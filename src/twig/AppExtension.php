<?php
namespace App\Twig;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('aireCercle', [$this, 'calculAireCercle']),
            new TwigFunction('calculVolume',[$this, 'calculVolumeSphere']),
            new TwigFunction('email',[$this, 'verifierEmail'])
        ];
    }

    public function calculAireCercle(int $rayon)
    {
        $pi = 3.14;
        return $pi*($rayon)**2;
    }

    public function calculVolumeSphere(int $rayon)
    {
        $pi = 3.14;
        $a = 4/3;
        $b = $pi*$a;
        return $b*($rayon)**3;
    }

    public function verifierEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L'adresse e-mail est valide";
        }else{
            echo"L'adresse n'est pas valide";
        }
    }
}
?>