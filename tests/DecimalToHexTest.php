<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait DecimalToHexTest
{

    public function testDecimalToHex(): void
    {
        $this->assertEquals(
            '2e',
            Math::decimalToHex(46)
        );
    }

}
