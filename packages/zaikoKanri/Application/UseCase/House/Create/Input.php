<?php
declare(strict_types=1);

namespace ZaikoKanri\Application\UseCase\House\Create;

final class Input
{
  public function __construct(
    public string $buildingName,
    public int    $userId
  )
  {
  }
}
