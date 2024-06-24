<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait ProductTestTrait
{
    public function testProduct(): void
    {
        $this->assertSame(
            24,
            Math::product(2, 3, 4)
        );
    }
}
