<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/6/2018
 * Time: 11:55 PM
 */

namespace App\Service\IntrumentManager;


class Style
{
    const STYLE_A = 'A';
    const STYLE_B = 'B';

    public static function getStyle () {
        return [
            self::STYLE_A,
            self::STYLE_B,
        ];
    }
}