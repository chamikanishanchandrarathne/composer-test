<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6c2b72de5863c1961a67afbadc0a655
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Acme\\Db' => __DIR__ . '/../..' . '/src/db.php',
        'Acme\\Page' => __DIR__ . '/../..' . '/src/app.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6c2b72de5863c1961a67afbadc0a655::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6c2b72de5863c1961a67afbadc0a655::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6c2b72de5863c1961a67afbadc0a655::$classMap;

        }, null, ClassLoader::class);
    }
}
