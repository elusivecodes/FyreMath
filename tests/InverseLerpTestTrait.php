<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait InverseLerpTestTrait
{

    public function testInverseLerp(): void
    {
        $this->assertSame(
            .5,
            Math::inverseLerp(50, 100, 75)
        );
    }

}
