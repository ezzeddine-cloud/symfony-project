<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NewHcontrollerController extends AbstractController
{
    #[Route('/new/hcontroller', name: 'app_new_hcontroller')]
    public function index(): Response
    {
        return $this->render('new_hcontroller/index.html.twig', [
            'controller_name' => 'NewHcontrollerController',
        ]);
    }
#[Route(path: '/bonjour',name:'bonjour')]
public function bonjour(): Response {
    return new Response ( "Bonjour mes étudiants");
}
}
