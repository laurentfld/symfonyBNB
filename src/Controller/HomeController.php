<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @route("/",name= "homepage")
     */
    public function home(){
        $prenoms= ["Laurent"=> 46, "Danielle"=> 45, "Lenny"=> 13, "Valentin"=> 18];

        return$this->render(
            'home.html.twig',
            [
                'title'=> "Aurevoir tout le monde",
                'age'=> 31,
                'tableau' => $prenoms
                ]
        );
    }
    /**
     * @Route("/bonjour/{prenom}/age/{age}", name="hello")
     * @Route("/bonjour", name="hello_base")
     * @Route("/bonjour/{prenom}", name="hello_prenom")
     * 
     * Montre la page qui dit bonjour
     */
    public function hello($prenom = "anonyme", $age= 0) {
        return $this->render(
            'hello.html.twig',
            [
                'prenom'=> $prenom,
                'age'=> $age
            ]
            );
    }
}

?>