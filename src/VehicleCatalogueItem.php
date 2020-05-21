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
     * @param UuidInterface $id
     */
    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
    }

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
}
