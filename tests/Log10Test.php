<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait Log10Test
{

    public function testLog10(): void
    {
        $this->assertEquals(
            1.3979400086720377,
            Math::log10(25)
        );
    }

}
