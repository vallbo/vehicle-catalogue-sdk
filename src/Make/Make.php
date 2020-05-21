<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\Make;

class Make
{
    private int $catalogueId;
    private string $key;
    private string $name;

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
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
