<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd72ceff5a11cb28458ea099122f515f2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Demo\\demo\\ComposerDemo\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Demo\\demo\\ComposerDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd72ceff5a11cb28458ea099122f515f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd72ceff5a11cb28458ea099122f515f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
