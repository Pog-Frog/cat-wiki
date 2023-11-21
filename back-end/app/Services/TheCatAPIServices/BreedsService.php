<?php

namespace App\Services\TheCatAPIServices;

use GuzzleHttp\Client;

/**
 * Class to requests in The Cat API Breeds
 * Documentation at https://docs.thecatapi.com/api-reference/breeds
 */
class BreedsService extends TheCatAPIService
{
    // public methods

    /**
     * Search cat breeds by any string, filtering by name
     *
     * @url    https://docs.thecatapi.com/api-reference/breeds/breeds-search
     * @param  string  $query
     * @return array
     */
    public function searchCatBreeds(string $query): array
    {
        // search endpoint
        $endpoint = "/v1/breeds/search";
        // initialize response as an array
        $response = [];

        // do the request in The Cat API using Guzzle
        try {
            $response = $this->client->get($endpoint, [
                'query' => [
                    'q' => $query,
                ],
            ]);

            // decode the JSON response
            $response = [
                'data' => json_decode($response->getBody(), true),
            ];
        } catch (\Exception $e) {
            // handle errors
            $this->error = true;
            $response = [
                'errorCode' => $e->getCode(),
                'message' => $e->getMessage(),
            ];
        }

        // return the processed response
        return $response;
    }

	/**
	 * Get all cat breeds and store it in the database
	 **/

	public function getAllCatBreeds(): array
	{
		// search endpoint
		$endpoint = "/v1/breeds";
		// initialize response as an array
		$response = [];

		// do the request in The Cat API using Guzzle
		try {
			$response = $this->client->get($endpoint, [
				'query' => [
					'limit' => 100,
				],
			]);

			// decode the JSON response
			$response = [
				'data' => json_decode($response->getBody(), true),
			];
		} catch (\Exception $e) {
			// handle errors
			$this->error = true;
			$response = [
				'errorCode' => $e->getCode(),
				'message' => $e->getMessage(),
			];
		}

		// return the processed response
		return $response;
	}

	/**
	 * Get a single breed by its id
	 *
	 * @url    https://docs.thecatapi.com/api-reference/breeds/breeds-id
	 * @param  string  $id
	 * @return array
	 */
	public function getSingleBreed(string $id): array
	{
		// search endpoint
		$endpoint = "/breeds/{$id}";
		// initialize response as an array
		$response = [];

		// do the request in The Cat API using Guzzle
		try {
			$response = $this->client->get($endpoint);

			// decode the JSON response
			$response = [
				'data' => json_decode($response->getBody(), true),
			];
		} catch (\Exception $e) {
			// handle errors
			$this->error = true;
			$response = [
				'errorCode' => $e->getCode(),
				'message' => $e->getMessage(),
			];
		}

		// return the processed response
		return $response;
	}
}