<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d5f97ade0f2e856eaab0fd87a96e2bd
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Transport\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Transport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Transport',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d5f97ade0f2e856eaab0fd87a96e2bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d5f97ade0f2e856eaab0fd87a96e2bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d5f97ade0f2e856eaab0fd87a96e2bd::$classMap;

        }, null, ClassLoader::class);
    }
}