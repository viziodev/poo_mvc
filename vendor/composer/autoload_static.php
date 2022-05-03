<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ddebee02ee6b2c5033e637c81f8847d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Exception\\' => 14,
            'App\\Core\\' => 9,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Exception\\' => 
        array (
            0 => __DIR__ . '/../..' . '/exceptions',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ddebee02ee6b2c5033e637c81f8847d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ddebee02ee6b2c5033e637c81f8847d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ddebee02ee6b2c5033e637c81f8847d::$classMap;

        }, null, ClassLoader::class);
    }
}
