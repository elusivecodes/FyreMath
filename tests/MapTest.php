<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait MapTest
{

    public function testMap(): void
    {
        $this->assertEquals(
            71.875,
            Math::map(25, 10, 50, 25, 150)
        );
    }

}
