<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait AcosTest
{

    public function testAcos(): void
    {
        $this->assertSame(
            1.0471975511965979,
            Math::acos(0.5)
        );
    }

}
