<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba8503f99e413bc6df9b2746306e424c
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba8503f99e413bc6df9b2746306e424c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba8503f99e413bc6df9b2746306e424c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitba8503f99e413bc6df9b2746306e424c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
