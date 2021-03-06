<?php

namespace App\Controller;

use App\Repository\AppartementRepository;
use App\Repository\TerrainRepository;
use App\Repository\VillaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(AppartementRepository $appartementRepository, TerrainRepository $terrainRepository, VillaRepository $villaRepository)
    {
        $appartement = $appartementRepository->findAll();
        $terrain = $terrainRepository->findAll();
        $villa = $villaRepository->findAll();
        
        return $this->render('home/index.html.twig', [
            'appartement' => $appartement,
            'terrain' => $terrain,
            'villa' => $villa,
        ]);
    }
}
