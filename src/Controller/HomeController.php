<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

  ##[Route('/home', name:'getHome',methods: ['GET'] )]

  /**
   * @Route("/home", name="getHome", methods={"GET"})
   */
  public function getHome(): Response
  {
      return $this->render('pages/home.html.twig');
  }

// /**
//  * @return Response
//  */
// #[Route('/home', name:'getHome',methods: ['GET'] )]
//   public function getHome(): Response
//   {
//       return $this->render('pages/home.html.twig');
//   }
//
}
