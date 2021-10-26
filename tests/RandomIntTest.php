<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

use function
    count,
    array_unique;

trait RandomIntTest
{

    public function testRandomInt(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::randomInt(10);
            $this->assertTrue(
                $value >= 0 && $value <= 10
            );
            $this->assertEquals(
                Math::round($value),
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertTrue(
            count($numbers) > 1
        );
    }

    public function testRandomIntWithMax(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::randomInt(10, 50);
            $this->assertTrue(
                $value >= 10 && $value <= 50
            );
            $this->assertEquals(
                Math::round($value),
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertTrue(
            count($numbers) > 1
        );
    }

    public function testRandomIntNegative(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::randomInt(-50, -10);
            $this->assertTrue(
                $value >= -50 && $value <= -10
            );
            $this->assertEquals(
                Math::round($value),
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertTrue(
            count($numbers) > 1
        );
    }

}
