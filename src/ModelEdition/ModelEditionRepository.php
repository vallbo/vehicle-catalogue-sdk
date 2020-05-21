<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelEdition;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method array<ModelEdition> findAll();
 */
class ModelEditionRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/make';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, ModelEdition::class);
    }
}
