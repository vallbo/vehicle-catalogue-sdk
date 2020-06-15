<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelFamily;

use Carvago\VehicleCatalogue\SDK\KeyNameTrait;

class ModelFamily
{
    use KeyNameTrait;

    private int $catalogueId;

    /**
     * @var array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition>
     */
    private array $modelEditions = [];

    /**
     * @return int
     */
    public function getCatalogueId(): int
    {
        return $this->catalogueId;
    }

    /**
     * @param int $catalogueId
     */
    public function setCatalogueId(int $catalogueId): void
    {
        $this->catalogueId = $catalogueId;
    }

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition>
     */
    public function getModelEditions(): array
    {
        return $this->modelEditions;
    }

    /**
     * @param array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition> $modelEditions
     */
    public function setModelEditions(array $modelEditions): void
    {
        $this->modelEditions = $modelEditions;
    }
}
