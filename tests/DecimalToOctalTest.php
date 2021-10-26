<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait DecimalToOctalTest
{

    public function testDecimalToOctal(): void
    {
        $this->assertEquals(
            '56',
            Math::decimalToOctal(46)
        );
    }

}
