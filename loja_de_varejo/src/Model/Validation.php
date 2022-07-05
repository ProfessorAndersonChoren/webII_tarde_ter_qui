<?php

namespace APP\Model;

class Validation
{
    public static function validateBarCode(string $barCode): bool
    {
        return mb_strlen($barCode) == 13 && mb_substr($barCode,0,3) == '789';
    }

    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 4;
    }

    public static function validateNumber(int|float $number):bool{
        return $number > 0;
    }
}