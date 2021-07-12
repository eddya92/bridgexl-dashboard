<?php

namespace App\pages\ordini;

use App\services\BridgeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdiniController extends AbstractController
{
    private $VIEW = "src/pages/ordini/views/";

    /**
     * @Route("elenco-ordini", name="ordini")
     */
    public function getElencoOrdini(): Response
    {


        return $this->render($this->VIEW . 'elencoOrdini.html.twig');
    }

    /**
     * @Route("ajax-elenco-ordini", name="ordini", methods={post})
     */
    public function postAjaxElencoOrdini(): JsonResponse
    {


        return new JsonResponse('{data:asdasdasd}');
    }

    /**
     * @Route("/nuovo-ordine", name="nuovoOrdine")
     */
    public function getNuovoOrdine(): Response
    {

        return $this->render($this->VIEW . 'nuovoOrdine.html.twig');
    }
}