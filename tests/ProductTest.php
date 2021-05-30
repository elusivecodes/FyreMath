<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait ProductTest
{

    public function testProduct(): void
    {
        $this->assertEquals(
            24,
            Math::product(2, 3, 4)
        );
    }

}
