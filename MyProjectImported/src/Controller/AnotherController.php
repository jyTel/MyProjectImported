<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnotherController extends AbstractController
{
    /**
     * @Route("/another", name="another")
     */
    public function index()
    {
        return $this->render('another/index.html.twig', [
            'controller_name' => 'AnotherController',
        ]);
    }
}
