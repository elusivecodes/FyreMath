<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait ExpTest
{

    public function testExp(): void
    {
        $this->assertEquals(
            1.6487212707001282,
            Math::exp(0.5)
        );
    }

}
