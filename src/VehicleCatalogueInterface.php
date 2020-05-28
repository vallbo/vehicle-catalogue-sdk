<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

interface VehicleCatalogueInterface
{
    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\Make\Make>
     */
    public function getMakes(): array;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily>
     */
    public function getModelFamilies(): array;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition>
     */
    public function getModelEditions(): array;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\Drive\Drive>
     */
    public function getDrives(): array;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\Fuel\Fuel>
     */
    public function getFuels(): array;

    /**
     * @return array<\Carvago\VehicleCatalogue\SDK\Transmission\Transmission>
     */
    public function getTransmissions(): array;
}
