<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TerzaController extends AbstractController
{
    ##[Route('/terza', name:'getTerza',methods: ['GET'] )]


    /**
     * @Route("/terza", name="getTerza", methods={"GET"})
     */
    public function getTerza(): Response
    {
        return $this->render('pages/terza.html.twig');
    }

}
