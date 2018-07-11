<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb00cf3c1e616be5f095359ec9d54ca0
{
    public static $files = array (
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'logstore_xapi\\' => 14,
        ),
        'X' => 
        array (
            'XREmitter\\Tests\\' => 16,
            'XREmitter\\' => 10,
        ),
        'T' => 
        array (
            'TinCan\\' => 7,
            'Tests\\' => 6,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
        ),
        'N' => 
        array (
            'Negotiation\\' => 12,
            'Namshi\\JOSE\\' => 12,
        ),
        'M' => 
        array (
            'MXTranslator\\Tests\\' => 19,
            'MXTranslator\\' => 13,
        ),
        'L' => 
        array (
            'LogExpander\\Tests\\' => 18,
            'LogExpander\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'logstore_xapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'XREmitter\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/lib/emitter',
        ),
        'XREmitter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/emitter/src',
        ),
        'TinCan\\' => 
        array (
            0 => __DIR__ . '/..' . '/rusticisoftware/tincan/src',
        ),
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'Negotiation\\' => 
        array (
            0 => __DIR__ . '/..' . '/willdurand/negotiation/src/Negotiation',
        ),
        'Namshi\\JOSE\\' => 
        array (
            0 => __DIR__ . '/..' . '/namshi/jose/src/Namshi/JOSE',
        ),
        'MXTranslator\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/lib/translator',
        ),
        'MXTranslator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/translator/src',
        ),
        'LogExpander\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/lib/expander',
        ),
        'LogExpander\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/expander/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb00cf3c1e616be5f095359ec9d54ca0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb00cf3c1e616be5f095359ec9d54ca0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
