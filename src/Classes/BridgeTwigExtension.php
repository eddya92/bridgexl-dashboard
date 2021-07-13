<?php


namespace App\Classes;

use Twig\Extension\AbstractExtension;
use Twig\Markup;
use Twig\TwigFunction;

class BridgeTwigExtension extends AbstractExtension
{
    private $bridgeService;

    /**
     * BridgeTwigExtension constructor.
     * @param BridgeService $bridgeService
     */
    public function __construct(BridgeService $bridgeService)
    {
        $this->bridgeService = $bridgeService;
    }

    /**
     * ci permette di creare funzioni per twig
     * primo parametro,è il nome del metodo che verrà utilizzato per richiamarla nel twig,il secondo è il nome del metodo di questa classe
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('renderWidget', [$this, 'renderWidget']),
        ];
    }

    /**
     * accetta il nome di un twig o widget + parametri opzionali
     * ritorna la vista o il widget
     * @param string $widgetName
     * @param string $params
     * @return Markup
     */
    public function renderWidget(string $widgetName, $params = []): Markup
    {
        return new Markup($this->bridgeService->renderWidget($widgetName, $params), 'UTF-8');
    }

}
