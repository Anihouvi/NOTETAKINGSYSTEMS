<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '051304be2705da9bf2eaa6525dc161cb' => __DIR__ . '/../..' . '/src/Http/helpers.php',
        '942ba663a366bb283ddc7d922a616d75' => __DIR__ . '/../..' . '/includes/tsugi/helpers.php',
        '71386a3d7eb48bc6fdff17a842c17b70' => __DIR__ . '/../..' . '/includes/tsugi/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tsugi\\' => 6,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'E' => 
        array (
            'EONConsulting\\PHPStencil\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tsugi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include/tsugi',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'EONConsulting\\PHPStencil\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}