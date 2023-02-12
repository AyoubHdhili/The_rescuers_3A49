<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackOfficeController extends AbstractController
{
    #[Route('/back', name: 'app_back')]
    public function index(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'BackOfficeController',
        ]);
    }
    #[Route('/users', name: 'app_users')]
    public function users_list(): Response
    {
        return $this->render('back_office/users.html.twig', [
            'controller_name' => 'BackOfficeController',
        ]);
    }
}
