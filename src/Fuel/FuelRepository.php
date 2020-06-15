<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Fuel;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Fuel[] findAll(string $locale);
 */
class FuelRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/fuel';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Fuel::class);
    }
}
