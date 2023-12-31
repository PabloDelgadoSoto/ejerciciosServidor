<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd20a3225190b8331c1e2bb6c91771dc1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'D' => 
        array (
            'Dawes\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Dawes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Dawes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd20a3225190b8331c1e2bb6c91771dc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd20a3225190b8331c1e2bb6c91771dc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd20a3225190b8331c1e2bb6c91771dc1::$classMap;

        }, null, ClassLoader::class);
    }
}
