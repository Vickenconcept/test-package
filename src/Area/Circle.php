<?php

namespace Area\Shapes;

class Circle
{
    public static function area($radius)
    {
        return 3.14 *($radius* $radius);
    }
}