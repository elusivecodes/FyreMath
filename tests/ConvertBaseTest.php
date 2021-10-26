<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait ConvertBaseTest
{

    public function testConvertBase(): void
    {
        $this->assertEquals(
            '2b',
            Math::convertBase(43, 10, 16)
        );
    }

    public function testConvertBaseString(): void
    {
        $this->assertEquals(
            '43',
            Math::convertBase('2b', 16, 10)
        );
    }

}
