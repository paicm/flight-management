<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit052f962e9a31d173a3c7f98c4ee9c8bd
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit052f962e9a31d173a3c7f98c4ee9c8bd::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
