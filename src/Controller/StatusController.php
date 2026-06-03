<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StatusController
{
    #[Route('/status', name: 'app_status', methods: ['GET', 'HEAD'])]
    public function status(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}
