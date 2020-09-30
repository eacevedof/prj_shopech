<?php
declare(strict_types=1);
namespace App\Providers;

class SeoProvider
{
    private static $seo = [
        "home"=>[
            "title"=>"Shop Admin v1.0.0",
            "description"=>"Shop ECH Backend",
            "keywords" => "shop el chalan backend",
            "h1" => "Shop ECH for small business"
        ],
    ];

    public static function get_meta($route)
    {
        return self::$seo[$route];
    }
}