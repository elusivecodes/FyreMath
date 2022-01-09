<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait AsinhTest
{

    public function testAsinh(): void
    {
        $this->assertSame(
            1.1947632172871094,
            Math::asinh(1.5)
        );
    }

}
