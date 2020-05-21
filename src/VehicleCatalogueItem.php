<?php

namespace Carvago\VehicleCatalogue\SDK;

use Ramsey\Uuid\UuidInterface;

trait VehicleCatalogueItem
{
    private UuidInterface $id;
    private int $catalogueId;
    private string $key;
    private string $name;

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCatalogueId(): int
    {
        return $this->catalogueId;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}