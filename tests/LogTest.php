<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait LogTest
{

    public function testLog(): void
    {
        $this->assertEquals(
            3.2188758248682006,
            Math::log(25)
        );
    }

    public function testLogWithBase(): void
    {
        $this->assertEquals(
            4.643856189774724,
            Math::log(25, 2)
        );
    }

}
