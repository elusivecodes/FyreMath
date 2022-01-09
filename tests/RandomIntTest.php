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
            $this->assertGreaterThanOrEqual(
                0,
                $value
            );
            $this->assertLessThanOrEqual(
                10,
                $value
            );
            $this->assertSame(
                (int) Math::round($value),
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertGreaterThan(
            1,
            count($numbers)
        );
    }

    public function testRandomIntWithMax(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::randomInt(10, 50);
            $this->assertGreaterThanOrEqual(
                10,
                $value
            );
            $this->assertLessThanOrEqual(
                50,
                $value
            );
            $this->assertSame(
                (int) Math::round($value),
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertGreaterThan(
            1,
            count($numbers)
        );
    }

    public function testRandomIntNegative(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::randomInt(-50, -10);
            $this->assertGreaterThanOrEqual(
                -50,
                $value
            );
            $this->assertLessThanOrEqual(
                -10,
                $value
            );
            $this->assertSame(
                (int) Math::round($value),
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertGreaterThan(
            1,
            count($numbers)
        );
    }

}
