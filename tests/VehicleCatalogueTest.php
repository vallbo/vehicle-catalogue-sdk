<?php

namespace Carvago\Test\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\BodyColor\BodyColor;
use Carvago\VehicleCatalogue\SDK\BodyColor\BodyColorRepository;
use Carvago\VehicleCatalogue\SDK\CarStyle\CarStyle;
use Carvago\VehicleCatalogue\SDK\CarStyle\CarStyleRepository;
use Carvago\VehicleCatalogue\SDK\Condition\Condition;
use Carvago\VehicleCatalogue\SDK\Condition\ConditionRepository;
use Carvago\VehicleCatalogue\SDK\Country\Country;
use Carvago\VehicleCatalogue\SDK\Country\CountryRepository;
use Carvago\VehicleCatalogue\SDK\Currency\Currency;
use Carvago\VehicleCatalogue\SDK\Currency\CurrencyRepository;
use Carvago\VehicleCatalogue\SDK\Drive\Drive;
use Carvago\VehicleCatalogue\SDK\Drive\DriveRepository;
use Carvago\VehicleCatalogue\SDK\FeatureCategory\FeatureCategory;
use Carvago\VehicleCatalogue\SDK\FeatureCategory\FeatureCategoryRepository;
use Carvago\VehicleCatalogue\SDK\Fuel\Fuel;
use Carvago\VehicleCatalogue\SDK\Fuel\FuelRepository;
use Carvago\VehicleCatalogue\SDK\InteriorMaterial\InteriorMaterial;
use Carvago\VehicleCatalogue\SDK\InteriorMaterial\InteriorMaterialRepository;
use Carvago\VehicleCatalogue\SDK\Make\Make;
use Carvago\VehicleCatalogue\SDK\Make\MakeRepository;
use Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEdition;
use Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEditionRepository;
use Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamily;
use Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamilyRepository;
use Carvago\VehicleCatalogue\SDK\SellerType\SellerType;
use Carvago\VehicleCatalogue\SDK\SellerType\SellerTypeRepository;
use Carvago\VehicleCatalogue\SDK\Transmission\TransmissionRepository;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogue;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;
use PHPUnit\Framework\TestCase;

class VehicleCatalogueTest extends TestCase
{
    private VehicleCatalogue $instance;

    public function setUp(): void
    {
        $client = new VehicleCatalogueClient($GLOBALS['CATALOGUE_ENDPOINT']);
        $this->instance = new VehicleCatalogue(
            new MakeRepository($client),
            new ModelFamilyRepository($client),
            new ModelEditionRepository($client),
            new DriveRepository($client),
            new FuelRepository($client),
            new TransmissionRepository($client),
            new BodyColorRepository($client),
            new CarStyleRepository($client),
            new CountryRepository($client),
            new ConditionRepository($client),
            new CurrencyRepository($client),
            new FeatureCategoryRepository($client),
            new InteriorMaterialRepository($client),
            new SellerTypeRepository($client)
        );
    }

    /**
     * @dataProvider getTestData
     * @param string $function
     * @param string $class
     * @param string $locale
     * @param string $needle
     */
    public function testBasicEnum(string $function, string $class, string $locale, string $needle)
    {
        $response = $this->instance->{$function}($locale);
        $values = [];
        foreach ($response as $item) {
            $this->assertInstanceOf($class, $item);
            $values[] = $item->getName();
        }
        $this->assertTrue(in_array($needle, $values), $needle . ' not in [' . implode(',', $values) . ']');
    }

    /**
     * @dataProvider getFeatureTestData
     * @param string $locale
     * @param string $needle
     */
    public function testFeatures(string $locale, string $needle)
    {
        $response = $this->instance->getFeatureCategories($locale);
        $values = [];
        $this->testFeatureChildren($response, $values);
        $this->assertTrue(in_array($needle, $values), $needle . ' not in [' . implode(',', $values) . ']');
    }

    /**
     * @param array<FeatureCategory> $list
     * @param array<string> $values
     */
    private function testFeatureChildren(array $list, array &$values): void
    {
        /** @var FeatureCategory $item */
        foreach ($list as $item) {
            $this->assertInstanceOf(FeatureCategory::class, $item);
            $values[] = $item->getName();
            $this->testFeatureChildren($item->getChildren(), $values);
        }
    }

    /**
     * @return string[][]
     */
    public function getTestData(): array
    {
        return [
            [
                'getBodyColors', BodyColor::class, 'en_US', 'Black',
            ],
            [
                'getBodyColors', BodyColor::class, 'cs_CZ', 'Black',
            ],
            [
                'getBodyColors', BodyColor::class, 'de_DE', 'Black',
            ],
            [
                'getCarStyles', CarStyle::class, 'en_US', 'Coupe',
            ],
            [
                'getCarStyles', CarStyle::class, 'cs_CZ', 'Dodávka',
            ],
            [
                'getCarStyles', CarStyle::class, 'de_DE', 'Limousine',
            ],
            [
                'getConditions', Condition::class, 'en_US', 'Demonstration car',
            ],
            [
                'getConditions', Condition::class, 'cs_CZ', 'Předváděcí vůz',
            ],
            [
                'getConditions', Condition::class, 'de_DE', 'Vorführfahrzeug',
            ],
            [
                'getCountries', Country::class, 'en_US', 'Portugal',
            ],
            [
                'getCountries', Country::class, 'cs_CZ', 'Irsko',
            ],
            [
                'getCountries', Country::class, 'de_DE', 'Belgien',
            ],
            [
                'getCurrencies', Currency::class, 'en_US', 'EUR',
            ],
            [
                'getCurrencies', Currency::class, 'cs_CZ', 'CZK',
            ],
            [
                'getCurrencies', Currency::class, 'de_DE', 'GBP',
            ],
            [
                'getDrives', Drive::class, 'en_US', '4x4',
            ],
            [
                'getDrives', Drive::class, 'cs_CZ', 'Přední',
            ],
            [
                'getDrives', Drive::class, 'de_DE', 'Frontantrieb',
            ],
            [
                'getFuels', Fuel::class, 'en_US', 'Ethanol',
            ],
            [
                'getFuels', Fuel::class, 'cs_CZ', 'Elektřina',
            ],
            [
                'getFuels', Fuel::class, 'de_DE', 'Wasserstoff',
            ],
            [
                'getInteriorMaterials', InteriorMaterial::class, 'en_US', 'Other interior material',
            ],
            [
                'getInteriorMaterials', InteriorMaterial::class, 'cs_CZ', 'Velurový interiér',
            ],
            [
                'getInteriorMaterials', InteriorMaterial::class, 'de_DE', 'Volllederausstattung',
            ],
            [
                'getMakes', Make::class, 'en_US', 'Donkervoort',
            ],
            [
                'getMakes', Make::class, 'cs_CZ', 'Lexus',
            ],
            [
                'getMakes', Make::class, 'de_DE', 'Porsche',
            ],
            [
                'getModelFamilies', ModelFamily::class, 'en_US', 'Starion',
            ],
            [
                'getModelFamilies', ModelFamily::class, 'cs_CZ', 'Patrol',
            ],
            [
                'getModelFamilies', ModelFamily::class, 'de_DE', '318 Gran Turismo',
            ],
            [
                'getModelEditions', ModelEdition::class, 'en_US', 'Audi 90 quattro',
            ],
            [
                'getModelEditions', ModelEdition::class, 'cs_CZ', 'Seat Ibiza 1.6 16V DSG',
            ],
            [
                'getModelEditions', ModelEdition::class, 'de_DE', 'Ferrari 550 F Maranello',
            ],
            [
                'getSellerTypes', SellerType::class, 'en_US', 'Carvago',
            ],
            [
                'getSellerTypes', SellerType::class, 'cs_CZ', 'Autobazar',
            ],
            [
                'getSellerTypes', SellerType::class, 'de_DE', 'Partner-Händler',
            ],
        ];
    }

    public function getFeatureTestData()
    {
        return [
            ['en_US', 'Bose audio'],
            ['cs_CZ', 'Přepážka zavazadlového prostoru'],
            ['de_DE', 'Grundtempomat'],
        ];
    }
}
