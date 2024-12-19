<?php

namespace App\Controller;

use App\Repository\NouveauteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NouveauteController extends AbstractController
{
    #[Route('/nouveaute', name: 'app_nouveaute')]
    public function index(NouveauteRepository $repository): Response
    {
        return $this->render('nouveaute/index.html.twig', [
            'controller_name' => 'NouveauteController',

        ]);
    }
}
