<?php

class Validator
{
    public static function string(string $str, int $min = 1, float $max = INF): bool
    {
        $str = trim($str);

        return strlen($str) >= $min && strlen($str) <= $max;
    }

    public static function email(string $email): mixed
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}