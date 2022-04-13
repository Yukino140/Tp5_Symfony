<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/calcul/{name}/{date}")
     */
    public function index($name,$date)
    {
        return $this->render('home/test.html.twig', [
            'nom' => $name,
            'date' =>2022 - $date 
            
        ]);
    }
     /**
     * @Route("/test/home")
     */
    public function index2()
    {
        return $this->render('home/index.html.twig', 
        );
    }
}





?>