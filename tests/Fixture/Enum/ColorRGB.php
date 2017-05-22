<?php

/**
 * Carousel project.
 *
 * @author Peter Gribanov <PGribanov@1tv.com>
 */

namespace GpsLab\Component\Enum\Tests\Fixture\Enum;

use GpsLab\Component\Enum\ReflectionEnum;

/**
 * @method static ColorRGB red()
 * @method static ColorRGB green()
 * @method static ColorRGB blue()
 * @method bool isRed()
 * @method bool isGreen()
 * @method bool isBlue()
 * @method static ColorRGB byValue($value)
 */
class ColorRGB extends ReflectionEnum
{
    const RED = 1;
    const GREEN = 2;
    const BLUE = 3;

    /**
     * @return string
     */
    public function __toString()
    {
        return 'acme.demo.color.'.strtolower(parent::__toString());
    }
}