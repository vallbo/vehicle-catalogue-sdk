<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\Translation\Translation;

abstract class AbstractTranslationRepository
{
    public const RESOURCE_URI = null;

    protected VehicleCatalogueClient $client;
    protected TranslationMapper $translationMapper;

    /**
     * @param VehicleCatalogueClient $client
     * @param TranslationMapper $translationMapper
     */
    public function __construct(VehicleCatalogueClient $client, TranslationMapper $translationMapper)
    {
        $this->client = $client;
        $this->translationMapper = $translationMapper;
    }

    /**
     * @param string $locale
     * @return Translation[]
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
        /** @var array<string,string> $items */
        $items = json_decode($response->getContent(), true);

        return $this->translationMapper->mapTranslations($items);
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
}
