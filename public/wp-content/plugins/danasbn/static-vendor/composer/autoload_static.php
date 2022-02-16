<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86ed898551891d2a752a66574df77af8
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Danasbn\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Danasbn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86ed898551891d2a752a66574df77af8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86ed898551891d2a752a66574df77af8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86ed898551891d2a752a66574df77af8::$classMap;

        }, null, ClassLoader::class);
    }
}
