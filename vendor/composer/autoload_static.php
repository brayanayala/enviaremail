<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite70f01d8e47e6582e9e321b69e4141cd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite70f01d8e47e6582e9e321b69e4141cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite70f01d8e47e6582e9e321b69e4141cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite70f01d8e47e6582e9e321b69e4141cd::$classMap;

        }, null, ClassLoader::class);
    }
}