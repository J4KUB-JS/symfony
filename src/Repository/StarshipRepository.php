<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{

  public function __construct(private LoggerInterface $logger)
  {
    
  }

  public function getAll()
  {
    $this->logger->info('info');

    return [
      new Starship(
          1,
          'USS LeafyCruiser (NCC-0001)',
          'Garden',
          'Jean-Luc Pickles',
          'taken over by Q'
      ),
      new Starship(
          2,
          'USS Espresso (NCC-1234-C)',
          'Latte',
          'James T. Quick!',
          'repaired',
      ),
      new Starship(
          3,
          'USS Wanderlust (NCC-2024-W)',
          'Delta Tourist',
          'Kathryn Journeyway',
          'under construction',
      ),
  ];
  }

  public function find(int $id): ?Starship
  {
    $result = null;

    foreach($this->getAll() as $starship) {
      if($starship->getId() === $id){
        $result = $starship;
      }
    }

    return $result;
  }
};