<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait BinaryToDecimalTestTrait
{

    public function testBinaryToDecimal(): void
    {
        $this->assertSame(
            46,
            Math::binaryToDecimal('101110')
        );
    }

}
