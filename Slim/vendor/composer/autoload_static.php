<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbba73ae943d5388ecc45b8f0c428dae8
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitbba73ae943d5388ecc45b8f0c428dae8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbba73ae943d5388ecc45b8f0c428dae8::$classMap;

        }, null, ClassLoader::class);
    }
}
