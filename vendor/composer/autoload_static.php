<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite603add1a29fbe93757ad712c444291f
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite603add1a29fbe93757ad712c444291f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
