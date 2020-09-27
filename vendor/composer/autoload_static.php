<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14bc1488df97f40ddaf07ac9b675c3c6
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'paytm\\paytmchecksum\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'paytm\\paytmchecksum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/paytmchecksum',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14bc1488df97f40ddaf07ac9b675c3c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14bc1488df97f40ddaf07ac9b675c3c6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit14bc1488df97f40ddaf07ac9b675c3c6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
