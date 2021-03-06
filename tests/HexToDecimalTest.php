<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait HexToDecimalTest
{

    public function testHexToDecimal(): void
    {
        $this->assertSame(
            46,
            Math::hexToDecimal('2e')
        );
    }

}
