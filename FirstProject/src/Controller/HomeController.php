<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

#[Route(path: '/hello',name:'hello')]

public function hello(): Response {
    return new Response ( content: "hello 3a26");
}
#[Route(path: '/contact/{tel}',name:'contact')]
public function contact($tel): Response{
    return $this->render('home/contact.html.twig',['tel'=>$tel]);
}
#[Route(path: '/show',name:'show')]
public function show(): Response {
     return new Response ( content: "bienvenue");
}
#[Route(path: '/affiche',name:'affiche')]
public function affiche(): Response {
    return $this->render('home/affiche.html.twig');
}   
}