<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc72056915a8bcb46435bbfd5087b27a9
{
    public static $files = array (
        'dc1507ccded3951a45917cf84015ed99' => __DIR__ . '/..' . '/wpscholar/wp-structured-video-data/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wpscholar\\WordPress\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wpscholar\\WordPress\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpscholar/wp-structured-video-data',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc72056915a8bcb46435bbfd5087b27a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc72056915a8bcb46435bbfd5087b27a9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}