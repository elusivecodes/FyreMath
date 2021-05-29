<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait AcosTest
{

    public function testAcos(): void
    {
        $this->assertEquals(
            1.0471975511965979,
            Math::acos(0.5)
        );
    }

}
