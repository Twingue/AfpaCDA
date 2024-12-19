<?php

namespace App\Controller;

use App\Repository\InstrumentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InstrumentController extends AbstractController
{
    #[Route('/instrument', name: 'app_instrument')]
    public function index(InstrumentsRepository $repository): Response
    {
        return $this->render('instrument/index.html.twig', [
        'instruments'=>$repository->findAll()


        ]);
    }
}
