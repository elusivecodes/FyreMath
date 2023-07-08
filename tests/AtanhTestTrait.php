<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait AtanhTestTrait
{

    public function testAtanh(): void
    {
        $this->assertSame(
            .5493061443340548,
            Math::atanh(.5)
        );
    }

}
