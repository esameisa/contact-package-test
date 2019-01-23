<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5eca8933e65c9bd0b325393d3186403f
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Esameisa\\Contact\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Esameisa\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5eca8933e65c9bd0b325393d3186403f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5eca8933e65c9bd0b325393d3186403f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
