<?php

namespace App\Classes;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Controller\ControllerReference;

class BridgeService extends AbstractController
{

    /**
     * Accetta una stringa(nome vista o widget)+parametri opzionali
     * Ritorna un Controller(in base alla stringa che passiamo)
     * Il controller genera una vista o twig
     * @param string $widgetName
     * @param string $params
     * @return false|string
     */
    public function renderWidget(string $widgetName, $params = []) {
        $response = $this->forward('App\\Controller\WidgetsControllers\Widget'.ucfirst(strtolower($widgetName)).'Controller::renderWidget', [
            'params' => $params
        ]);
        return $response->getContent();

    }

}