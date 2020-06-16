<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Condition;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Condition[] findAll(string $locale);
 */
class ConditionRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/condition';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Condition::class);
    }
}
