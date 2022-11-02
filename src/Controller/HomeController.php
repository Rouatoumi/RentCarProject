<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CarRepository;
use App\Repository\ContactRepository;


class HomeController extends AbstractController
{
    #[Route('/admin', name: 'app_home')]
    public function index(CarRepository $carRepository,ContactRepository $contactRepository): Response
    {
        $nb_cars = count($carRepository->findAll()); 
        $nb_contact = count($contactRepository->findAll());

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController', 
            'nb_cars' => $nb_cars,
            'nb_contact' => $nb_contact 
        ]);
    }
}
