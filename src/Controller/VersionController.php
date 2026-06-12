<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\Attribute\Route;

class VersionController extends AbstractController
{
    #[Route('/version', name: 'app_version', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return new JsonResponse([
            'symfony' => Kernel::VERSION,
            'php' => PHP_VERSION,
        ]);
    }
}
