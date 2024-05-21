<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit961b496e7c89966f300fe7876c15364b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit961b496e7c89966f300fe7876c15364b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit961b496e7c89966f300fe7876c15364b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}