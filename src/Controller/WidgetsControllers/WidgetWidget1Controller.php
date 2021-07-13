<?php

namespace App\Controller\WidgetsControllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidgetWidget1Controller extends AbstractController
{
    public function renderWidget($params = []): Response
    {
        return $this->render('widgets/widget1.html.twig');

    }

}
