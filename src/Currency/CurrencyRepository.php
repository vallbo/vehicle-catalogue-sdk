<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Currency;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method Currency[] findAll(string $locale);
 */
class CurrencyRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/currency';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, Currency::class);
    }
}
