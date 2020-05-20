<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class VehicleCatalogueClient
{
    private HttpClientInterface $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    /**
     * @param string $url
     * @param array $options
     * @throws TransportExceptionInterface
     * @return ResponseInterface
     */
    public function get(string $url, array $options = []): ResponseInterface
    {
        return $this->client->request('GET', $url, $options);
    }
}
