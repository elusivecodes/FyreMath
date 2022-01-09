<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait FmodTest
{

    public function testFmod(): void
    {
        $this->assertSame(
            3.0,
            Math::fmod(33, 5)
        );
    }

}
