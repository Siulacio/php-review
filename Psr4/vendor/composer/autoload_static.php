<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8337a67df31dd89ce9ecf745265ca640
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Prueba\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Prueba\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8337a67df31dd89ce9ecf745265ca640::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8337a67df31dd89ce9ecf745265ca640::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8337a67df31dd89ce9ecf745265ca640::$classMap;

        }, null, ClassLoader::class);
    }
}
