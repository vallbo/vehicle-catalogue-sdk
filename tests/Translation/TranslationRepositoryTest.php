<?php

declare(strict_types=1);

namespace Carvago\Test\VehicleCatalogue\SDK\Translation;

use Carvago\VehicleCatalogue\SDK\Translation\Translation;
use Carvago\VehicleCatalogue\SDK\Translation\TranslationRepository;
use Carvago\VehicleCatalogue\SDK\TranslationMapper;
use Carvago\VehicleCatalogue\SDK\VehicleCatalogueClient;
use PHPUnit\Framework\TestCase;

class TranslationRepositoryTest extends TestCase
{
    private TranslationRepository $instance;

    public function setUp(): void
    {
        $client = new VehicleCatalogueClient($GLOBALS['CATALOGUE_ENDPOINT']);
        $this->instance = new TranslationRepository(
            $client,
            new TranslationMapper()
        );
    }

    /**
     * @dataProvider getLocales
     * @param string $locale
     */
    public function testList(string $locale)
    {
        $result = $this->instance->findAll($locale);
        $this->assertNotEmpty($result);
    }

    /**
     * @dataProvider getTranslations
     * @param string $key
     * @param string $locale
     * @param string $value
     */
    public function testTranslateKey(string $key, string $locale, string $value)
    {
        $result = $this->instance->find($key, $locale);
        $this->assertInstanceOf(Translation::class, $result);
        $this->assertEquals($key, $result->getKey());
        $this->assertEquals($value, $result->getName());
    }

    /**
     * @return string[][]
     */
    public function getLocales(): array
    {
        return [
            ['en_US'],
            ['cs_CZ'],
            ['de_DE'],
        ];
    }

    public function getTranslations()
    {
        return [
            ['FEATURE_SLOT_FOR_MEMORY_CARD', 'en_US', 'Memory card slot'],
            ['DRIVE_4X4', 'cs_CZ', '4x4'],
            ['FEATURE_HEADLIGHTSTYPE_BI_XENON', 'de_DE', 'Bi-Xenon Scheinwerfer'],
        ];
    }
}
