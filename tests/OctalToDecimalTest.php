<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait OctalToDecimalTest
{

    public function testOctalToDecimal(): void
    {
        $this->assertEquals(
            46,
            Math::octalToDecimal('56')
        );
    }

}
