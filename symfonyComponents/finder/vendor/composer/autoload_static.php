<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc70fa1fdb65a0e7a8a8d6684b0fd4f9b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc70fa1fdb65a0e7a8a8d6684b0fd4f9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc70fa1fdb65a0e7a8a8d6684b0fd4f9b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
