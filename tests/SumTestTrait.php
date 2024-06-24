<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait SumTestTrait
{
    public function testSum(): void
    {
        $this->assertSame(
            9,
            Math::sum(2, 3, 4)
        );
    }
}
