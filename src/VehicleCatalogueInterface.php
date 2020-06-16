<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\BodyColor\BodyColor;
use Carvago\VehicleCatalogue\SDK\CarStyle\CarStyle;
use Carvago\VehicleCatalogue\SDK\Condition\Condition;
use Carvago\VehicleCatalogue\SDK\Country\Country;
use Carvago\VehicleCatalogue\SDK\Currency\Currency;
use Carvago\VehicleCatalogue\SDK\Drive\Drive;
use Carvago\VehicleCatalogue\SDK\FeatureCategory\FeatureCategory;
use Carvago\VehicleCatalogue\SDK\Fuel\Fuel;
use Carvago\VehicleCatalogue\SDK\InteriorMaterial\InteriorMaterial;
use Carvago\VehicleCatalogue\SDK\Make\Make;
use Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition;
use Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily;
use Carvago\VehicleCatalogue\SDK\SellerType\SellerType;
use Carvago\VehicleCatalogue\SDK\Transmission\Transmission;

interface VehicleCatalogueInterface
{
    /**
     * @param string $locale
     * @return BodyColor[]
     */
    public function getBodyColors(string $locale): array;

    /**
     * @param string $locale
     * @return CarStyle[]
     */
    public function getCarStyles(string $locale): array;

    /**
     * @param string $locale
     * @return Condition[]
     */
    public function getConditions(string $locale): array;

    /**
     * @param string $locale
     * @return Country[]
     */
    public function getCountries(string $locale): array;

    /**
     * @param string $locale
     * @return Currency[]
     */
    public function getCurrencies(string $locale): array;

    /**
     * @param string $locale
     * @return Drive[]
     */
    public function getDrives(string $locale): array;

    /**
     * @param string $locale
     * @return FeatureCategory[]
     */
    public function getFeatureCategories(string $locale): array;

    /**
     * @param string $locale
     * @return Fuel[]
     */
    public function getFuels(string $locale): array;

    /**
     * @param string $locale
     * @return InteriorMaterial[]
     */
    public function getInteriorMaterials(string $locale): array;

    /**
     * @param string $locale
     * @return Make[]
     */
    public function getMakes(string $locale): array;

    /**
     * @param string $locale
     * @return ModelFamily[]
     */
    public function getModelFamilies(string $locale): array;

    /**
     * @param string $locale
     * @return ModelEdition[]
     */
    public function getModelEditions(string $locale): array;

    /**
     * @param string $locale
     * @return SellerType[]
     */
    public function getSellerTypes(string $locale): array;

    /**
     * @param string $locale
     * @return Transmission[]
     */
    public function getTransmissions(string $locale): array;
}
