<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait FmodTest
{

    public function testFmod(): void
    {
        $this->assertEquals(
            3,
            Math::fmod(33, 5)
        );
    }

}
