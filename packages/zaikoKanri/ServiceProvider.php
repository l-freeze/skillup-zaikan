<?php
declare(strict_types=1);

namespace ZaikoKanri;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use ZaikoKanri\Domain\Repository\IHouseRepository;
use ZaikoKanri\Persistence\HouseRepository;

final class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
  /**
   * @phpstan-ignore-next-line
   */
  public $bindings = [
    IHouseRepository::class => HouseRepository::class,
  ];

  public function provides(): array
  {
    return [
      IHouseRepository::class,
    ];
  }

}
