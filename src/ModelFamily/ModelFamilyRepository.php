<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelFamily;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method ModelFamily[] findAll(string $locale);
 */
class ModelFamilyRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/model-family';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, ModelFamily::class);
    }
}
