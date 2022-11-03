<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf28606b622771c87e1ba97f7c3c0d995
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Websedit\\Service\\' => 17,
            'Websedit\\Classes\\' => 17,
            'Websedit\\' => 9,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Websedit\\Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/service',
        ),
        'Websedit\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
        'Websedit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf28606b622771c87e1ba97f7c3c0d995::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf28606b622771c87e1ba97f7c3c0d995::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf28606b622771c87e1ba97f7c3c0d995::$classMap;

        }, null, ClassLoader::class);
    }
}