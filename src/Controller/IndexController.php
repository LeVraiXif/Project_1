<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app_index', ['_locale' => 'en']);
    }

    #[Route('/{_locale<%app.supported_locales%>}/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
