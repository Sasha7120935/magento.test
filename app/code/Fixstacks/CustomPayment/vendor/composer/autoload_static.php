<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8c7b11319009dfaad37f0962bb02336
{
    public static $files = array (
        '1cf9f5b55e8777fb8c1af003ea37636e' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fixstacks\\CustomPayment\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fixstacks\\CustomPayment\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8c7b11319009dfaad37f0962bb02336::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8c7b11319009dfaad37f0962bb02336::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}