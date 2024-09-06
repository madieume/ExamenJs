<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb47a0d3be08aeddfd61796c5c1f61536
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Madieume\\ExamenJs\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Madieume\\ExamenJs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb47a0d3be08aeddfd61796c5c1f61536::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb47a0d3be08aeddfd61796c5c1f61536::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb47a0d3be08aeddfd61796c5c1f61536::$classMap;

        }, null, ClassLoader::class);
    }
}
