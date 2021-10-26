<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait BinaryToDecimalTest
{

    public function testBinaryToDecimal(): void
    {
        $this->assertEquals(
            46,
            Math::binaryToDecimal('101110')
        );
    }

}
