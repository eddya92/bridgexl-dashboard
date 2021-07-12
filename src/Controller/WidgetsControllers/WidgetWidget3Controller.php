<?php

namespace App\Controller\WidgetsControllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidgetWidget3Controller extends AbstractController
{
    public function renderWidget($params = [])
    {
        return $this->render('widgets/widget3.html.twig');

    }

}
