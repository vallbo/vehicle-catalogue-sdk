<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\InteriorMaterial;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method InteriorMaterial[] findAll(string $locale);
 */
class InteriorMaterialRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/interior-material';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, InteriorMaterial::class);
    }
}
