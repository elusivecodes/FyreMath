<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait PowTestTrait
{

    public function testPow(): void
    {
        $this->assertSame(
            256,
            Math::pow(2, 8)
        );
    }

}
