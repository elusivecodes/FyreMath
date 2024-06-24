<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait MinTestTrait
{
    public function testMin(): void
    {
        $this->assertSame(
            10.0,
            Math::min(25, 10, 50, 25, 150)
        );
    }
}
