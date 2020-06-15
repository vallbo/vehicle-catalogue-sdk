<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Country;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Country[] findAll(string $locale);
 */
class CountryRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/country';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Country::class);
    }
}
