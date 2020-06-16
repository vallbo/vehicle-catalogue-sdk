<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Make;

use Carvago\VehicleCatalogue\SDK\KeyNameTrait;

class Make
{
    use KeyNameTrait;

    private int $catalogueId;

    /**
     * @var array<\Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily>
     */
    private array $modelFamilies = [];

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
