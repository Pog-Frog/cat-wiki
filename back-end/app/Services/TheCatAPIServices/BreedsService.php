<?php

namespace App\Services\TheCatAPIServices;


class BreedsService extends TheCatAPIService
{
    public function searchCatBreeds(string $query): array
    {
        $endpoint = "/v1/breeds/search";
        $response = [];

        try {
            $response = $this->client->get($endpoint, [
                'query' => [
                    'q' => $query,
                ],
            ]);

            $response = [
                'data' => json_decode($response->getBody(), true),
            ];
        } catch (\Exception $e) {
            $this->error = true;
            $response = [
                'errorCode' => $e->getCode(),
                'message' => $e->getMessage(),
            ];
        }

        return $response;
    }

    public function getAllCatBreeds(): array
    {
        $endpoint = "/v1/breeds";
        $response = [];

        try {
            $response = $this->client->get($endpoint, [
                'query' => [
                    'limit' => 100,
                ],
            ]);

            $response = [
                'data' => json_decode($response->getBody(), true),
            ];
        } catch (\Exception $e) {
            $this->error = true;
            $response = [
                'errorCode' => $e->getCode(),
                'message' => $e->getMessage(),
            ];
        }

        return $response;
    }

    public function getSingleBreed(string $id): array
    {
        $endpoint = "/breeds/{$id}";
        $response = [];

        try {
            $response = $this->client->get($endpoint);

            $response = [
                'data' => json_decode($response->getBody(), true),
            ];
        } catch (\Exception $e) {
            $this->error = true;
            $response = [
                'errorCode' => $e->getCode(),
                'message' => $e->getMessage(),
            ];
        }

        return $response;
    }
}