<?php
namespace Kata;

/**
 * Class HalloweenParty
 * @package Kata
 */
class ChocolateCutter
{
    public static function cut($cuts)
    {
        $vertical = (int) floor($cuts/2);
        $horizontal = $cuts - $vertical;

        return ($vertical + 1) * ($horizontal + 1);
    }
}
