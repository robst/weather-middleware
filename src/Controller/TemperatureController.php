<?php

namespace App\Controller;

use App\Core\Service\TemperatureService;
use App\OpenWeatherMap\Exception\CityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TemperatureController
 * @Route("/temperature")
 */
class TemperatureController extends AbstractController
{
    /**
     * @Route("/by_city", name="temperature", methods={"GET"})
     */
    public function by_city(Request $request, TemperatureService $service)
    {
        try {

            return $this->json($service->getTemperatureForCity($request->query->get('city')));
        } catch (CityNotFoundException $e) {

            return $this->json(["message" => "city not found"], 404);;
        }
    }
}
