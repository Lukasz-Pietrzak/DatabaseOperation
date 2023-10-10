<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b07f4ca72a9cb2161ee5f9d0c859ede
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Prote\\DatabaseOperation\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Prote\\DatabaseOperation\\' => 
        array (
            0 => __DIR__ . '/..' . '/prote/database-operation/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b07f4ca72a9cb2161ee5f9d0c859ede::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b07f4ca72a9cb2161ee5f9d0c859ede::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b07f4ca72a9cb2161ee5f9d0c859ede::$classMap;

        }, null, ClassLoader::class);
    }
}
