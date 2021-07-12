<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondaController extends AbstractController
{

    ##[Route('/seconda', name:'getSeconda',methods: ['GET'] )]

    /**
     * @Route("/seconda", name="getSeconda", methods={"GET"})
     */
    public function getSeconda(): Response
    {
        return $this->render('pages/seconda.html.twig');
    }

    /**
     * @Route("/seconda", name="postSeconda", methods={"POST"})
     */
    public function postSeconda(): Response
    {
        // Esegui qualcosa...

        return $this->redirectToRoute('getSeconda', ['success' => true]);
    }

}
