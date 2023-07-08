<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait SinTestTrait
{

    public function testSin(): void
    {
        $this->assertSame(
            .479425538604203,
            Math::sin(.5)
        );
    }

}
