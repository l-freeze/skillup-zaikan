<?php
declare(strict_types=1);

namespace ZaikoKanri\Application\UseCase\House\Create;

use ZaikoKanri\Domain\Entity\House;
use ZaikoKanri\Domain\Repository\IHouseRepository;

final class Interactor
{
    public function __construct(
        private readonly IHouseRepository $houseRepository
    )
    {
    }

    public function execute(Input $input): Output
    {
        $house = House::create($input->buildingName, $input->userId);
        $result = $this->houseRepository->save($house);
        return new Output(
            id: 1,
            result: true
        );
    }
}
