<?php

declare(strict_types=1);

namespace Carvago\VehicleCatalogue\SDK;

use Carvago\VehicleCatalogue\SDK\Drive\DriveRepository;
use Carvago\VehicleCatalogue\SDK\Fuel\FuelRepository;
use Carvago\VehicleCatalogue\SDK\Make\MakeRepository;
use Carvago\VehicleCatalogue\SDK\ModelEdition\ModelEditionRepository;
use Carvago\VehicleCatalogue\SDK\ModelFamily\ModelFamilyRepository;
use Carvago\VehicleCatalogue\SDK\Transmission\TransmissionRepository;

final class VehicleCatalogue implements VehicleCatalogueInterface
{
    private MakeRepository $makeRepository;
    private ModelFamilyRepository $modelFamilyRepository;
    private ModelEditionRepository $modelEditionRepository;
    private DriveRepository $driveRepository;
    private FuelRepository $fuelRepository;
    private TransmissionRepository $transmissionRepository;

    /**
     * @param MakeRepository $makeRepository
     * @param ModelFamilyRepository $modelFamilyRepository
     * @param ModelEditionRepository $modelEditionRepository
     * @param DriveRepository $driveRepository
     * @param FuelRepository $fuelRepository
     * @param TransmissionRepository $transmissionRepository
     */
    public function __construct(
        MakeRepository $makeRepository,
        ModelFamilyRepository $modelFamilyRepository,
        ModelEditionRepository $modelEditionRepository,
        DriveRepository $driveRepository,
        FuelRepository $fuelRepository,
        TransmissionRepository $transmissionRepository
    ) {
        $this->makeRepository = $makeRepository;
        $this->modelFamilyRepository = $modelFamilyRepository;
        $this->modelEditionRepository = $modelEditionRepository;
        $this->driveRepository = $driveRepository;
        $this->fuelRepository = $fuelRepository;
        $this->transmissionRepository = $transmissionRepository;
    }

    /**
     * @inheritDoc
     */
    public function getMakes(): array
    {
        return $this->makeRepository->findAll();
    }

    /**
     * @inheritDoc
     */
    public function getModelFamilies(): array
    {
        return $this->modelFamilyRepository->findAll();
    }

    /**
     * @inheritDoc
     */
    public function getModelEditions(): array
    {
        return $this->modelEditionRepository->findAll();
    }

    /**
     * @inheritDoc
     */
    public function getDrives(): array
    {
        return $this->driveRepository->findAll();
    }

    /**
     * @inheritDoc
     */
    public function getFuels(): array
    {
        return $this->fuelRepository->findAll();
    }

    /**
     * @inheritDoc
     */
    public function getTransmissions(): array
    {
        return $this->transmissionRepository->findAll();
    }
}
