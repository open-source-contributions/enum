<?php

/**
 * Carousel project.
 *
 * @author Peter Gribanov <PGribanov@1tv.com>
 */

namespace GpsLab\Component\Enum\Tests\Fixture\Enum;

use GpsLab\Component\Enum\ReflectionEnum;

/**
 * @method static ConstAccess actionGet()
 * @method static ConstAccess actionPost()
 * @method bool isActionGet()
 * @method bool isActionPost()
 * @method static ConstAccess byValue($value)
 */
class ConstAccess extends ReflectionEnum
{
    private const OPTION_PUT = 'put';
    protected const OPTION_DELETE = 'delete';
    public const ACTION_GET = 'get';
    public const ACTION_POST = 'post';

    /**
     * @return string
     */
    public function __toString()
    {
        return 'acme.demo.const_access.'.strtolower(parent::__toString());
    }
}
