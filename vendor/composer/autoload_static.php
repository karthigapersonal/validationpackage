<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17e582066c84d16e503a72ccb121a2bc
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Obspackage\\Validpackage\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Obspackage\\Validpackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17e582066c84d16e503a72ccb121a2bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17e582066c84d16e503a72ccb121a2bc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
