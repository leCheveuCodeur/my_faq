<?php

namespace App\Service;

class ReverseHelper
{
    /**
     * Return the inverse of string
     * @param string $string
     * @return string
     */
    public function reverse(string $string): string
    {
        $result = array_reverse(explode(' ', $string));
        $result[0] = ucfirst($result[0]);
        $stringReversed = \implode(' ', $result);

        return $stringReversed;
    }
}
