<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelFamily;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method array<ModelFamily> findAll();
 */
class ModelFamilyRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/make';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, ModelFamily::class);
    }
}
