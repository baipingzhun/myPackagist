<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5dd3c870b9685ab72ae340aa72ebac09
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5dd3c870b9685ab72ae340aa72ebac09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5dd3c870b9685ab72ae340aa72ebac09::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
