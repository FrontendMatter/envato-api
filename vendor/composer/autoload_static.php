<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67f447b4f80ce0db3a5254fe55ae49d9
{
    public static $classMap = array (
        'FrontendMatter\\Envato' => __DIR__ . '/../..' . '/src/Class/Envato/Envato.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit67f447b4f80ce0db3a5254fe55ae49d9::$classMap;

        }, null, ClassLoader::class);
    }
}
