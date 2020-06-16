<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Translation;

use Carvago\VehicleCatalogue\SDK\AbstractTranslationRepository;
use Carvago\VehicleCatalogue\SDK\TranslationMapper;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

class TranslationRepository extends AbstractTranslationRepository
{
    public const RESOURCE_URI = '/api/translation';

    /**
     * @param VehicleCatalogueClient $client
     * @param TranslationMapper $translationMapper
     */
    public function __construct(VehicleCatalogueClient $client, TranslationMapper $translationMapper)
    {
        parent::__construct($client, $translationMapper);
    }

    /**
     * @param string $key
     * @param string $locale
     * @return Translation|null
     */
    public function find(string $key, string $locale): ?Translation
    {
        $endpoint = sprintf(
            '%s/%s',
            $this->getListEndpoint(),
            urlencode($key)
        );

        $response = $this->client->get(
            $endpoint,
            [
                'headers' => [
                    'Accept-Language' => $locale,
                ],
            ]
        );
        /** @var array<string,string> $item */
        $item = json_decode($response->getContent(), true);

        return $item['data'] ? $this->translationMapper->mapTranslation($key, $item['data']) : null;
    }
}
