<?php
declare(strict_types=1);

namespace ZaikoKanri\Domain\Value;

final readonly class HouseName
{
    public function __construct(
        public string $value
    )
    {
    }
}
