<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\BodyType;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method BodyType[] findAll();
 */
class BodyTypeRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/body-type';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, BodyType::class);
    }
}
