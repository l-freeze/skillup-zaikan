<?php
declare(strict_types=1);

namespace ZaikoKanri\Persistence;

use Illuminate\Support\Facades\Log;
use ZaikoKanri\Domain\Entity\House;
use ZaikoKanri\Domain\Repository\IHouseRepository;

class HouseRepository implements IHouseRepository
{
    public function save(House $house): true
    {
        // ここに処理を記述
        Log::debug('save house');
        return true;
    }

    public function delete(House $house): void
    {
        // ここに処理を記述
    }

    public function update(House $house): void
    {
        // ここに処理を記述
    }
}
