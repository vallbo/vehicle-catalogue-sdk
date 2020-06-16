<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Translation;

use Carvago\VehicleCatalogue\SDK\KeyNameTrait;

class Translation
{
    use KeyNameTrait;

    /**
     * @param string $key
     * @param string $name
     */
    public function __construct(string $key, string $name)
    {
        $this->key = $key;
        $this->name = $name;
    }
}
