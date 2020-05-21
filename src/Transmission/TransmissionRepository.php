<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Transmission;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Transmission[] findAll();
 */
class TransmissionRepository extends AbstractExternalRepository
{
    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Transmission::class);
    }
}
