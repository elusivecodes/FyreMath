<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait MaxTest
{

    public function testMax(): void
    {
        $this->assertEquals(
            150,
            Math::max(25, 10, 50, 25, 150)
        );
    }

}
