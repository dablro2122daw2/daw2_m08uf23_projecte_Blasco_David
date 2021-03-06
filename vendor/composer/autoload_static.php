<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3057535ecab51077148c70a4b265e2d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3057535ecab51077148c70a4b265e2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3057535ecab51077148c70a4b265e2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
