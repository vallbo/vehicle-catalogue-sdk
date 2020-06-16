<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK\FeatureCategory;

use Carvago\VehicleCatalogue\SDK\KeyNameTrait;

class FeatureCategory
{
    use KeyNameTrait;

    protected ?FeatureCategory $parent;
    /**
     * @var array<FeatureCategory>
     */
    protected array $children = [];

    /**
     * @return FeatureCategory|null
     */
    public function getParent(): ?FeatureCategory
    {
        return $this->parent;
    }

    /**
     * @param FeatureCategory|null $parent
     */
    public function setParent(?FeatureCategory $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return array<FeatureCategory>
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param array<FeatureCategory> $children
     */
    public function setChildren(array $children): void
    {
        $this->children = $children;
    }
}
