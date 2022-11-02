<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DoneController extends AbstractController
{
    #[Route('/done', name: 'app_done')]
    public function index(): Response
    {
        return $this->render('done/about.html.twig', [
            'controller_name' => 'DoneController',
        ]);
    }
}
