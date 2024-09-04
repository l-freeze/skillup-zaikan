<?php
declare(strict_types=1);

namespace Tests\Unit\ZaikoKanri\Application\UseCase\House;

//use Illuminate\Foundation\Testing\RefreshDatabase;
//uses(RefreshDatabase::class);

use ZaikoKanri\Application\UseCase\House\Create\Input;
use ZaikoKanri\Application\UseCase\House\Create\Interactor;
use ZaikoKanri\Application\UseCase\House\Create\Output;

describe('家の新規登録', function () {
    test('test_the_application_returns_a_successful_response', function () {

        /** @var Output $output */
        $output = app(Interactor::class)->execute(
            new Input('ビル名', 1)
        );
        expect($output->result)->toBeTrue();
    });
});
