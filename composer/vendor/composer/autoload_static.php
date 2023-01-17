<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe9e80e3d16f5b24e6c4e1438593a2db
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jhimyferrari\\Composer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jhimyferrari\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe9e80e3d16f5b24e6c4e1438593a2db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe9e80e3d16f5b24e6c4e1438593a2db::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfe9e80e3d16f5b24e6c4e1438593a2db::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfe9e80e3d16f5b24e6c4e1438593a2db::$classMap;

        }, null, ClassLoader::class);
    }
}