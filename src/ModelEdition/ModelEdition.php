<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\ModelEdition;

use Carvago\VehicleCatalogue\SDK\KeyNameTrait;

class ModelEdition
{
    use KeyNameTrait;

    private int $catalogueId;

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
}
