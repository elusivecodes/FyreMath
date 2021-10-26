<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait ExpMinus1Test
{

    public function testExpMinus1(): void
    {
        $this->assertEquals(
            0.6487212707001282,
            Math::expMinus1(0.5)
        );
    }

}
