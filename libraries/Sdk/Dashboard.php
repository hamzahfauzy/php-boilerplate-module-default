<?php

namespace Modules\Default\Libraries\Sdk;

class Dashboard 
{

    private static $contents  = [];

    static function add($content)
    {
        self::$contents[] = $content;
    }

    static function render()
    {
        return implode('', self::$contents);
    }

}