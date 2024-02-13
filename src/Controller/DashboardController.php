<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(
    ): Response
    {
        $url = 'https://hub.docker.com/';
        $response = file_get_contents($url);
        $todo = json_decode($response, true);

        return $this->render('dashboard.html.twig', [
            'todo' => $todo,
        ]);
    }
}


