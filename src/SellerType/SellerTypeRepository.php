<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\SellerType;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method SellerType[] findAll(string $locale);
 */
class SellerTypeRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/seller-type';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, SellerType::class);
    }
}
