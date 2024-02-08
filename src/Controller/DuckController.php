<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DuckController extends AbstractController
{
    #[Route('/donald','app_donald')]
    public function donaldAction(): Response
    {
        return $this->render('duck/donald.html.twig', ['name' => 'Donald']);
    }

    #[Route('/dagobert','app_dagobert')]
    public function dagobertAction(): Response
    {
        return $this->render('duck/dagobert.html.twig', ['name' => 'Dagobert']);
    }



}