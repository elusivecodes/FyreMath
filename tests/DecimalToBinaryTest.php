<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait DecimalToBinaryTest
{

    public function testDecimalToBinary(): void
    {
        $this->assertEquals(
            '101110',
            Math::decimalToBinary(46)
        );
    }

}
