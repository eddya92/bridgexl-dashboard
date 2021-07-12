<?php


namespace App\Classes;

use Twig\Extension\AbstractExtension;
use Twig\Markup;
use Twig\TwigFunction;

class BridgeTwigExtension extends AbstractExtension
{
    private $bridgeService;

    public function __construct(BridgeService $bridgeService)
    {
        $this->bridgeService = $bridgeService;
    }

    /**
     * ci permette di creare funzioni per twig
     * primo parametro,è il nome del metodo che verrà utilizzato per richiamarla nel twig,il secondo è il nome del metodo da php
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('renderWidget', [$this, 'renderWidget']),
        ];
    }

    /**
     * accetta il nome di un twig o widget
     * ritorna la vista o il widget
     * @param string $widgetName
     * @param string $params
     * @return Markup
     */
    public function renderWidget(string $widgetName, $params = [])
    {
        return new Markup($this->bridgeService->renderWidget($widgetName, $params), 'UTF-8');
    }

}