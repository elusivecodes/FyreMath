<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait ExpTestTrait
{
    public function testExp(): void
    {
        $this->assertSame(
            1.6487212707001282,
            Math::exp(.5)
        );
    }
}
