<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\CarStyle;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method CarStyle[] findAll(string $locale);
 */
class CarStyleRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/car-style';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, CarStyle::class);
    }
}
