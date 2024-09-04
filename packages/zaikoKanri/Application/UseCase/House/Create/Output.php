<?php
declare(strict_types=1);

namespace ZaikoKanri\Application\UseCase\House\Create;

final readonly class Output
{
    public function __construct(
        public ?int $id,
        public bool $result
    )
    {
    }
}
