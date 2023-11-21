<?php

namespace App\Services\TheCatAPIServices;

use GuzzleHttp\Client;

/**
 * Class to connect and do requests for The Cat API
 */
class TheCatAPIService
{
    /**
     * Guzzle client to make requests
     *
     * @var GuzzleHttp\Client
     */
    protected $client;

    /**
     * Url for request
     *
     * @var string
     */
    protected $apiUrl;

    /**
     * API Key for authentication
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Boolean to check if the request has any error
     *
     * @var bool
     */
    public $error;

    /**
     * Constructor method make bases for any request;
     *
     * @param string $apiKey
     * @param string $apiUrl
     */
    public function __construct(string $apiKey, string $apiUrl)
    {
        // set API Key for authentication
        $this->apiKey = $apiKey;
        // set api url
        $this->apiUrl = $apiUrl;

        // init Guzzle client
        $this->init();
    }

    // private methods

    /**
     * Initialize Guzzle client and set the authentication header
     */
    protected function init()
    {
        // instantiate Guzzle client
        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'x-api-key' => $this->apiKey,
            ],
        ]);
    }
}