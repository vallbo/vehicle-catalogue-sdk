<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\BodyColor\BodyColorRepository;
use Carvago\VehicleCatalogue\SDK\CarStyle\CarStyleRepository;
use Carvago\VehicleCatalogue\SDK\Condition\ConditionRepository;
use Carvago\VehicleCatalogue\SDK\Country\CountryRepository;
use Carvago\VehicleCatalogue\SDK\Currency\CurrencyRepository;
use Carvago\VehicleCatalogue\SDK\Drive\DriveRepository;
use Carvago\VehicleCatalogue\SDK\FeatureCategory\FeatureCategoryRepository;
use Carvago\VehicleCatalogue\SDK\Fuel\FuelRepository;
use Carvago\VehicleCatalogue\SDK\InteriorMaterial\InteriorMaterialRepository;
use Carvago\VehicleCatalogue\SDK\Make\MakeRepository;
use Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEditionRepository;
use Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamilyRepository;
use Carvago\VehicleCatalogue\SDK\SellerType\SellerTypeRepository;
use Carvago\VehicleCatalogue\SDK\Transmission\TransmissionRepository;

final class VehicleCatalogue implements VehicleCatalogueInterface
{
    private MakeRepository $makeRepository;
    private ModelFamilyRepository $modelFamilyRepository;
    private ModelEditionRepository $modelEditionRepository;
    private DriveRepository $driveRepository;
    private FuelRepository $fuelRepository;
    private TransmissionRepository $transmissionRepository;
    private BodyColorRepository $bodyColorRepository;
    private CarStyleRepository $carStyleRepository;
    private CountryRepository $countryRepository;
    private ConditionRepository $conditionRepository;
    private CurrencyRepository $currencyRepository;
    private FeatureCategoryRepository $featureCategoryRepository;
    private InteriorMaterialRepository $interiorMaterialsRepository;
    private SellerTypeRepository $sellerTypeRepository;

    /**
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     * @param MakeRepository $makeRepository
     * @param ModelFamilyRepository $modelFamilyRepository
     * @param ModelEditionRepository $modelEditionRepository
     * @param DriveRepository $driveRepository
     * @param FuelRepository $fuelRepository
     * @param TransmissionRepository $transmissionRepository
     * @param BodyColorRepository $bodyColorRepository
     * @param CarStyleRepository $carStyleRepository
     * @param CountryRepository $countryRepository
     * @param ConditionRepository $conditionRepository
     * @param CurrencyRepository $currencyRepository
     * @param FeatureCategoryRepository $featureCategoryRepository
     * @param InteriorMaterialRepository $interiorMaterialsRepository
     * @param SellerTypeRepository $sellerTypeRepository
     */
    public function __construct(
        MakeRepository $makeRepository,
        ModelFamilyRepository $modelFamilyRepository,
        ModelEditionRepository $modelEditionRepository,
        DriveRepository $driveRepository,
        FuelRepository $fuelRepository,
        TransmissionRepository $transmissionRepository,
        BodyColorRepository $bodyColorRepository,
        CarStyleRepository $carStyleRepository,
        CountryRepository $countryRepository,
        ConditionRepository $conditionRepository,
        CurrencyRepository $currencyRepository,
        FeatureCategoryRepository $featureCategoryRepository,
        InteriorMaterialRepository $interiorMaterialsRepository,
        SellerTypeRepository $sellerTypeRepository
    ) {
        $this->makeRepository = $makeRepository;
        $this->modelFamilyRepository = $modelFamilyRepository;
        $this->modelEditionRepository = $modelEditionRepository;
        $this->driveRepository = $driveRepository;
        $this->fuelRepository = $fuelRepository;
        $this->transmissionRepository = $transmissionRepository;
        $this->bodyColorRepository = $bodyColorRepository;
        $this->carStyleRepository = $carStyleRepository;
        $this->countryRepository = $countryRepository;
        $this->conditionRepository = $conditionRepository;
        $this->currencyRepository = $currencyRepository;
        $this->featureCategoryRepository = $featureCategoryRepository;
        $this->interiorMaterialsRepository = $interiorMaterialsRepository;
        $this->sellerTypeRepository = $sellerTypeRepository;
    }

    /**
     * @inheritDoc
     */
    public function getBodyColors(string $locale): array
    {
        return $this->bodyColorRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getCarStyles(string $locale): array
    {
        return $this->carStyleRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getConditions(string $locale): array
    {
        return $this->conditionRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getCountries(string $locale): array
    {
        return $this->countryRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getCurrencies(string $locale): array
    {
        return $this->currencyRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getDrives(string $locale): array
    {
        return $this->driveRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getFeatureCategories(string $locale): array
    {
        return $this->featureCategoryRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getFuels(string $locale): array
    {
        return $this->fuelRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getInteriorMaterials(string $locale): array
    {
        return $this->interiorMaterialsRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getMakes(string $locale): array
    {
        return $this->makeRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getModelFamilies(string $locale): array
    {
        return $this->modelFamilyRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getModelEditions(string $locale): array
    {
        return $this->modelEditionRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getSellerTypes(string $locale): array
    {
        return $this->sellerTypeRepository->findAll($locale);
    }

    /**
     * @inheritDoc
     */
    public function getTransmissions(string $locale): array
    {
        return $this->transmissionRepository->findAll($locale);
    }
}
