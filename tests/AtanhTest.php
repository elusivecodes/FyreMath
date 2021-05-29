<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait AtanhTest
{

    public function testAtanh(): void
    {
        $this->assertEquals(
            0.5493061443340548,
            Math::atanh(0.5)
        );
    }

}
