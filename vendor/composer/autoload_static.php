<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a35638ce81c3f4da927eeef83af73e4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a35638ce81c3f4da927eeef83af73e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a35638ce81c3f4da927eeef83af73e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a35638ce81c3f4da927eeef83af73e4::$classMap;

        }, null, ClassLoader::class);
    }
}