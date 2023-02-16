<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    #[Route("/")]
    public function homePage(): Response{
        return $this->render('index.html.twig');
    }

    #[Route("/contact", name: 'contact')]
    public function contactPage(): Response{
        return $this->render('contact.html.twig');
    }

}