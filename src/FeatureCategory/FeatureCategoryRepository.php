<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\FeatureCategory;

use Carvago\VehicleCatalogue\SDK\AbstractExternalRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;

/**
 * @method FeatureCategory[] findAll(string $locale);
 */
class FeatureCategoryRepository extends AbstractExternalRepository
{
    public const RESOURCE_URI = '/api/feature-category';

    /**
     * @param VehicleCatalogueClient $client
     */
    public function __construct(VehicleCatalogueClient $client)
    {
        parent::__construct($client, FeatureCategory::class);
    }
}
