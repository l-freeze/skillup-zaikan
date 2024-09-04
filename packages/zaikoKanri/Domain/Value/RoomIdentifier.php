<?php
declare(strict_types=1);

namespace ZaikoKanri\Domain\Value;

use Ramsey\Uuid\Uuid;

final readonly class RoomIdentifier
{
    public function __construct(
        public string $value
    )
    {
    }

    public static function new(): self
    {
        return new self(Uuid::uuid7()->toString());
    }
}
