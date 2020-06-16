<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use InvalidArgumentException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

abstract class AbstractExternalRepository
{
    public const RESOURCE_URI = null;

    protected VehicleCatalogueClient $client;
    protected SerializerInterface $serializer;
    protected string $entityClass;

    /**
     * @param VehicleCatalogueClient $client
     * @param string $entityClass
     */
    public function __construct(
        VehicleCatalogueClient $client,
        string $entityClass
    ) {
        $this->client = $client;
        $this->entityClass = $entityClass;

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer(), new ArrayDenormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param string $locale
     * @return object[]
     */
    public function findAll(string $locale): array
    {
        $response = $this->client->get(
            $this->getListEndpoint(),
            [
                'headers' => [
                    'Accept-Language' => $locale,
                ],
            ]
        );
        $data = $this->serializer->deserialize($response->getContent(), $this->getArrayOfEntityClass(), 'json');

        if (!is_array($data)) {
            throw new InvalidArgumentException('Method findAll must return an array.');
        }

        return $data;
    }

    /**
     * @return string
     */
    protected function getResourceUri(): string
    {
        return static::RESOURCE_URI;
    }

    /**
     * @return string
     */
    protected function getListEndpoint(): string
    {
        return $this->getResourceUri();
    }

    /**
     * @return string
     */
    protected function getEntityClass(): string
    {
        return $this->entityClass;
    }

    /**
     * @return string
     */
    protected function getArrayOfEntityClass(): string
    {
        return sprintf('%s[]', $this->getEntityClass());
    }
}
