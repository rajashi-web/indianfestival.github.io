<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfaff407c4f30f5dd279058b4f0c28642
{
    public static $classMap = array (
        'Mexitek\\PHPColors\\Color' => __DIR__ . '/..' . '/mexitek/phpcolors/src/Mexitek/PHPColors/Color.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfaff407c4f30f5dd279058b4f0c28642::$classMap;

        }, null, ClassLoader::class);
    }
}