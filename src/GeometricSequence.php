<?php
namespace GeometricSequence;


use PHPUnit\Runner\Exception;

class GeometricSequence {

    public static function checkGeometricSequence(array $numbers): bool
    {
        self::checkNumericArrayValues($numbers);

        if (count($numbers) <= 1) {
            return true;
        }

        $multiplier = $numbers[1]/$numbers[0];

        for ($i = 1; $i < count($numbers); $i++) {
            if (($numbers[$i]/($numbers[$i-1])) != $multiplier)
            {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $numbers
     */
    public static function checkNumericArrayValues(array $numbers): void
    {
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new \Exception('All array elements must be numbers');
            }
        }
    }
}