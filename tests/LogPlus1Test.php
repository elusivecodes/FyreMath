<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait LogPlus1Test
{

    public function testLogPlus1(): void
    {
        $this->assertEquals(
            3.258096538021482,
            Math::logPlus1(25)
        );
    }

}
