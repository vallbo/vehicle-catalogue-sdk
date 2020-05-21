<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Make;

use Carvago\VehicleCatalogue\SDK\VehicleCatalogueItem;

class Make
{
    use VehicleCatalogueItem;

    /**
     * @var array<\Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily>
     */
    private array $modelFamilies;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily>
     */
    public function getModelFamilies(): array
    {
        return $this->modelFamilies;
    }

    /**
     * @param array<\Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily> $modelFamilies
     */
    public function setModelFamilies(array $modelFamilies): void
    {
        $this->modelFamilies = $modelFamilies;
    }
}
