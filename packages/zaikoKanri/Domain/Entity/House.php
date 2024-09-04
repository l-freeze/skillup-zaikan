<?php
declare(strict_types=1);

namespace ZaikoKanri\Domain\Entity;

use Faker\Core\Uuid;
use ZaikoKanri\Domain\Value\HouseIdentifier;

final class House
{
    /**
     * @param array<int> $users
     */
    private function __construct(
        private HouseIdentifier $identifier,
        private string          $name,
        private int             $ownerId,
        private array           $userIds,
    )
    {
    }

    public static function create(string $name, int $userId): self
    {
        return new self(
            identifier: HouseIdentifier::new(),
            name: $name,
            ownerId: $userId,
            userIds: [$userId]
        );
    }
}
