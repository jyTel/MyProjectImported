<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WellcomeController extends AbstractController
{
    /**
     * @Route("/wellcome", name="wellcome")
     */
    public function index()
    {
        return $this->render('wellcome/index.html.twig', [
            'controller_name' => 'WellcomeController',
        ]);
    }
}
