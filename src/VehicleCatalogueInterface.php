<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\BodyColor\BodyColor;
use Carvago\VehicleCatalogue\SDK\BodyType\BodyType;
use Carvago\VehicleCatalogue\SDK\Drive\Drive;
use Carvago\VehicleCatalogue\SDK\Fuel\Fuel;
use Carvago\VehicleCatalogue\SDK\Make\Make;
use Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition;
use Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily;
use Carvago\VehicleCatalogue\SDK\Transmission\Transmission;

interface VehicleCatalogueInterface
{
    /**
     * @return Make[]
     */
    public function getMakes(): array;

    /**
     * @return ModelFamily[]
     */
    public function getModelFamilies(): array;

    /**
     * @return ModelEdition[]
     */
    public function getModelEditions(): array;

    /**
     * @return Drive[]
     */
    public function getDrives(): array;

    /**
     * @return Fuel[]
     */
    public function getFuels(): array;

    /**
     * @return Transmission[]
     */
    public function getTransmissions(): array;

    /**
     * @return BodyColor[]
     */
    public function getBodyColors(): array;

    /**
     * @return BodyType[]
     */
    public function getBodyTypes(): array;
}
