<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

use function
    count,
    array_unique;

trait RandomTest
{

    public function testRandom(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random();
            $this->assertGreaterThanOrEqual(
                0,
                $value
            );
            $this->assertLessThanOrEqual(
                1,
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertGreaterThan(
            100,
            count($numbers)
        );
    }

    public function testRandomWithMin(): void
    {
        $numbers = [];
        $numbersHigh = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random(10);
            $this->assertGreaterThanOrEqual(
                0,
                $value
            );
            $this->assertLessThanOrEqual(
                10,
                $value
            );
            $numbers[] = $value;
            if ($value > 1) {
                $numbersHigh[] = $value;
            }
        }

        $numbers = array_unique($numbers);
        $numbersHigh = array_unique($numbersHigh);


        $this->assertGreaterThan(
            100,
            count($numbers)
        );

        $this->assertGreaterThan(
            50,
            count($numbersHigh)
        );
    }

    public function testRandomWithMax(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random(10, 50);
            $this->assertGreaterThanOrEqual(
                10,
                $value
            );
            $this->assertLessThanOrEqual(
                50,
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertGreaterThan(
            100,
            count($numbers)
        );
    }

    public function testRandomNegative(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random(-50, -10);
            $this->assertGreaterThanOrEqual(
                -50,
                $value
            );
            $this->assertLessThanOrEqual(
                -10,
                $value
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertGreaterThan(
            100,
            count($numbers)
        );
    }

}
