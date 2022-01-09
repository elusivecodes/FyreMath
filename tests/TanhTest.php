<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait TanhTest
{

    public function testTanh(): void
    {
        $this->assertSame(
            0.46211715726000974,
            Math::tanh(0.5)
        );
    }

}
