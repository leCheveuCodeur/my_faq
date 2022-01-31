<?php

namespace App\Service;

class ReverseHelper
{
    public function reverse(string $string): string
    {
        $result = array_reverse(explode(' ', $string));
        $result[0]=ucfirst($result[0]);
        $stringReversed = '';
        foreach ($result as $value) {
            $stringReversed .= ' ' . $value;
        }

        return $stringReversed;
    }
}
