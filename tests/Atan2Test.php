<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait Atan2Test
{

    public function testAtan2(): void
    {
        $this->assertSame(
            0.3217505543966422,
            Math::atan2(0.5, 1.5)
        );
    }

}
