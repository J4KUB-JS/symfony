<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
  #[Route('/')]
  public function index (): Response 
  {
    $starshipCount = 123;
    return $this->render('main/homepage.html.twig', [
      'starshipCount' => $starshipCount
    ]);
  }
}