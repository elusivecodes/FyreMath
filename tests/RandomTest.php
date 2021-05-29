<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

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
            $this->assertTrue(
                $value >= 0 && $value < 1
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertTrue(
            count($numbers) > 100
        );
    }

    public function testRandomWithMin(): void
    {
        $numbers = [];
        $numbersHigh = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random(10);
            $this->assertTrue(
                $value >= 0 && $value < 10
            );
            $numbers[] = $value;
            if ($value > 1) {
                $numbersHigh[] = $value;
            }
        }

        $numbers = array_unique($numbers);
        $numbersHigh = array_unique($numbersHigh);

        $this->assertTrue(
            count($numbers) > 100
        );
        $this->assertTrue(
            count($numbersHigh) > 50
        );
    }

    public function testRandomWithMax(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random(10, 50);
            $this->assertTrue(
                $value >= 10 && $value < 50
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertTrue(
            count($numbers) > 100
        );
    }

    public function testRandomNegative(): void
    {
        $numbers = [];

        for ($i = 0; $i < 1000; $i++) {
            $value = Math::random(-50, -10);
            $this->assertTrue(
                $value >= -50 && $value < -10
            );
            $numbers[] = $value;
        }

        $numbers = array_unique($numbers);

        $this->assertTrue(
            count($numbers) > 100
        );
    }

}
