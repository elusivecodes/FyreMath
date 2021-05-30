<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait SumTest
{

    public function testSum(): void
    {
        $this->assertEquals(
            9,
            Math::sum(2, 3, 4)
        );
    }

}
