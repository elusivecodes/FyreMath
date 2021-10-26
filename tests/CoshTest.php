<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait CoshTest
{

    public function testCosh(): void
    {
        $this->assertEquals(
            1.1276259652063807,
            Math::cosh(0.5)
        );
    }

}
