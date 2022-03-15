<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42a3d862f62de5f83aba5757608eb68a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controllers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42a3d862f62de5f83aba5757608eb68a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42a3d862f62de5f83aba5757608eb68a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42a3d862f62de5f83aba5757608eb68a::$classMap;

        }, null, ClassLoader::class);
    }
}