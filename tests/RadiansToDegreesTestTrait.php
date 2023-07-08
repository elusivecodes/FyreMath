<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait RadiansToDegreesTestTrait
{

    public function testRadiansToDegrees(): void
    {
        $this->assertSame(
            45.0,
            Math::radiansToDegrees(.7853981633974483)
        );
    }

}
