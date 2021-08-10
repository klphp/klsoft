<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita87957e9baa6ec4c510c487daa5d73fa
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kl\\Klphp\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kl\\Klphp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita87957e9baa6ec4c510c487daa5d73fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita87957e9baa6ec4c510c487daa5d73fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita87957e9baa6ec4c510c487daa5d73fa::$classMap;

        }, null, ClassLoader::class);
    }
}
