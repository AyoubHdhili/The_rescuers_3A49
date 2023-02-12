<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/admin.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
    #[Route('/users', name: 'app_users')]
    public function users_list(): Response
    {
        return $this->render('dashboard/users.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
