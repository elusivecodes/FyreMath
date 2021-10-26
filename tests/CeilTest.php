<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait CeilTest
{

    public function testCeil(): void
    {
        $this->assertEquals(
            2,
            Math::ceil(1.25)
        );
    }

}
