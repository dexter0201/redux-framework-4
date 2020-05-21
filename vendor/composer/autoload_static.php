<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8be2fdb72614a4e4d1e1ae35a4ba38c2
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReduxTemplates\\' => 15,
            'ReduxCore\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReduxTemplates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/redux-templates/core',
        ),
        'ReduxCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/redux-core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8be2fdb72614a4e4d1e1ae35a4ba38c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8be2fdb72614a4e4d1e1ae35a4ba38c2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
