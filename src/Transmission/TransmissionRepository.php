<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Transmission;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Transmission[] findAll(string $locale);
 */
class TransmissionRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/transmission';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Transmission::class);
    }
}
