<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cc21b5d24399381e532d93d3560687a
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cc21b5d24399381e532d93d3560687a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cc21b5d24399381e532d93d3560687a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
