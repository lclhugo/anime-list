<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf66a64eaf2e8302db93f200ffce37040
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'N' => 
        array (
            'Nxzea\\AnimeList\\' => 16,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Nxzea\\AnimeList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf66a64eaf2e8302db93f200ffce37040::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf66a64eaf2e8302db93f200ffce37040::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf66a64eaf2e8302db93f200ffce37040::$classMap;

        }, null, ClassLoader::class);
    }
}