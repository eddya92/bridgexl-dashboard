<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $base=['1','2','3'];
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/primo", name="primo")
     */
    public function red(): Response
    {


        return $this->render('menu/primo/primo.html.twig');
    }

    /**
     * @Route("/secondo", name="secondo")
     */
    public function blu(): Response
    {

        return $this->render('menu/secondo.html.twig');
    }

}
