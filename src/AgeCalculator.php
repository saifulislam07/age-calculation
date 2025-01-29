<?php

namespace YourNamespace\AgeCalculator;

use DateTime;

class AgeCalculator
{
    public static function calculate($birthDate)
    {
        $birthDate = new DateTime($birthDate);
        $today = new DateTime();
        return $today->diff($birthDate)->y;
    }
}
