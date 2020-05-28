<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\BodyColor;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method BodyColor[] findAll();
 */
class BodyColorRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/body-color';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, BodyColor::class);
    }
}
