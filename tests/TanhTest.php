<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait TanhTest
{

    public function testTanh(): void
    {
        $this->assertEquals(
            0.46211715726000974,
            Math::tanh(0.5)
        );
    }

}
