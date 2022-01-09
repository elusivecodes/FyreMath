<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait DecimalToBinaryTest
{

    public function testDecimalToBinary(): void
    {
        $this->assertSame(
            '101110',
            Math::decimalToBinary(46)
        );
    }

}
