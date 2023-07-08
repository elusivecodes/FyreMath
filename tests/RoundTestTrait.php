<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait RoundTestTrait
{

    public function testRound(): void
    {
        $this->assertSame(
            2.0,
            Math::round(1.5)
        );
    }

    public function testRoundWithPrecision(): void
    {
        $this->assertSame(
            1.23,
            Math::round(1.2345, 2)
        );
    }

    public function testRoundWithMode(): void
    {
        $this->assertSame(
            1.0,
            Math::round(1.5, mode: Math::ROUND_HALF_DOWN)
        );
    }

}
