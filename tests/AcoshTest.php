<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait AcoshTest
{

    public function testAcosh(): void
    {
        $this->assertEquals(
            0.9624236501192069,
            Math::acosh(1.5)
        );
    }

}
