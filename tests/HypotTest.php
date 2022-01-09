<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait HypotTest
{

    public function testHypot(): void
    {
        $this->assertSame(
            2.5495097567963922,
            Math::hypot(0.5, 2.5)
        );
    }

}
