<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\Translation\Translation;

class TranslationMapper
{
    /**
     * @param array<string,string> $translations
     * @return array<string,Translation>
     */
    public function mapTranslations(array $translations): array
    {
        $result = [];
        foreach ($translations as $key => $name) {
            $result[$key] = $this->mapTranslation($key, $name);
        }

        return $result;
    }

    /**
     * @param string $key
     * @param string $name
     * @return Translation
     */
    public function mapTranslation(string $key, string $name): Translation
    {
        return new Translation($key, $name);
    }
}
