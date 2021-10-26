<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait SinhTest
{

    public function testSinh(): void
    {
        $this->assertEquals(
            0.5210953054937474,
            Math::sinh(0.5)
        );
    }

}
