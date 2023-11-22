<?php

namespace App\Services\TheCatAPIServices;

use GuzzleHttp\Client;

class TheCatAPIService
{
    protected $client;
    protected $apiUrl;
    protected $apiKey;
    public $error;

    public function __construct(string $apiKey, string $apiUrl)
    {
        $this->apiKey = $apiKey;
        $this->apiUrl = $apiUrl;
        $this->init();
    }

    protected function init()
    {
        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'x-api-key' => $this->apiKey,
            ],
        ]);
    }
}