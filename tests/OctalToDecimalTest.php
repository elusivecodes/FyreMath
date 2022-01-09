<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait OctalToDecimalTest
{

    public function testOctalToDecimal(): void
    {
        $this->assertSame(
            46,
            Math::octalToDecimal('56')
        );
    }

}
