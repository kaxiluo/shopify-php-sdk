<?php

namespace Shopify\Object;

class Shop extends AbstractObject
{
    protected static $classUrl = 'shop';

    public function __construct()
    {

    }

    /**
     * This is overridden since the shop is a singleton
     * object in Shopify's domain.
     *
     * @return self
     */
    public static function get()
    {
        return \Shopify\Shopify::call(self::$classUrl);
    }
}
