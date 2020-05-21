<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelFamily;

use Carvago\VehicleCatalogue\SDK\VehicleCatalogueItem;

class ModelFamily
{
    use VehicleCatalogueItem;

    /**
     * @var array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition>
     */
    private array $modelEdition;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition>
     */
    public function getModelEditions(): array
    {
        return $this->modelEdition;
    }

    /**
     * @param array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition> $modelEdition
     */
    public function setModelEdition(array $modelEdition): void
    {
        $this->modelEdition = $modelEdition;
    }
}
