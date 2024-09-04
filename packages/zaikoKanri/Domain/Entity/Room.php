<?php
declare(strict_types=1);

namespace ZaikoKanri\Domain\Entity;

use Illuminate\Support\Str;
use ZaikoKanri\Domain\Value\RoomIdentifier;

class Room
{
    private function __construct(
        private RoomIdentifier $identifier,
        private string         $name,
        private int            $houseId
    )
    {
    }

    public static function create(string $name, int $houseId): Room
    {
        return new self(
            identifier: RoomIdentifier::new(),
            name: $name,
            houseId: $houseId
        );
    }
}
