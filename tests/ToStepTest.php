<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait ToStepTest
{

    public function testToStep(): void
    {
        $this->assertSame(
            0.1,
            Math::toStep(0.12345, .1)
        );
    }

    public function testToStepInt(): void
    {
        $this->assertSame(
            132.0,
            Math::toStep(123, 33)
        );
    }

}
