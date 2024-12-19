<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DrinkController
{
    public function getList(): JsonResponse
    {
        return new JsonResponse([
            'method' => 'GET LIST',
        ]);
    }

    public function getOne(string $id): JsonResponse
    {
        return new JsonResponse([
            'method' => 'GET ONE',
            'id' => $id,
        ]);
    }

    public function create(Request $request): JsonResponse
    {
        return new JsonResponse([
            'method' => 'POST',
        ]);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        return new JsonResponse([
            'method' => 'PATCH',
            'id' => $id,
        ]);
    }

    public function remove(string $id): JsonResponse
    {
        return new JsonResponse([
            'method' => 'DELETE',
            'id' => $id,
        ]);
    }
}