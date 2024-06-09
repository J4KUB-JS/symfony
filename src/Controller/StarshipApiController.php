<?php

namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/starship')]
class StarshipApiController extends AbstractController
{
  #[Route('', methods: ['GET'])]
  public function index (StarshipRepository $repository): Response 
  {
    return $this->json($repository->getAll());
  }

  #[Route('/{id<\d+>}', methods: ['GET'])]
  public function show (StarshipRepository $repository, $id): Response 
  {
    $starship = $repository->find($id);

    if(!$starship){
        throw $this->createNotFoundException("Starship with id: $id not found");
    }

    return $this->json($starship);
  }

  #[Route('', methods: ['POST'])]
  public function create (StarshipRepository $repository,): Response 
  {
    return $this->json('');
  }

  #[Route('/{id<\d+>}', methods: ['PUT'])]
  public function update (StarshipRepository $repository, $id): Response 
  {

    return $this->json('');
  }
}