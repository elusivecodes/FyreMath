<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait ToStepTest
{

    public function testToStep(): void
    {
        $this->assertEquals(
            0.1,
            Math::toStep(0.12345, .1)
        );
    }

    public function testToStepInt(): void
    {
        $this->assertEquals(
            132,
            Math::toStep(123, 33)
        );
    }

}
