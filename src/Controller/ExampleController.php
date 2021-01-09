<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController
{
    /**
     * @Route('/')
     */
    public function sample(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
        ]);
    }
}