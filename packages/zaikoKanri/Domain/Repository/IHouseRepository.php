<?php
declare(strict_types=1);

namespace ZaikoKanri\Domain\Repository;

use ZaikoKanri\Domain\Entity\House;

interface IHouseRepository
{
    public function save(House $house): true;

    public function delete(House $house): void;

    public function update(House $house): void;
}
