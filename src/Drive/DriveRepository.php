<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Drive;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Drive[] findAll(string $locale);
 */
class DriveRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/drive';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Drive::class);
    }
}
