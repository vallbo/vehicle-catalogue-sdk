<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelEdition;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method ModelEdition[] findAll(string $locale);
 */
class ModelEditionRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/model-edition';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, ModelEdition::class);
    }
}
