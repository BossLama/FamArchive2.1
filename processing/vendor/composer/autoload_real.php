<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit424a08ef5f2c727d7f3f1cafbdd05a89
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit424a08ef5f2c727d7f3f1cafbdd05a89', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit424a08ef5f2c727d7f3f1cafbdd05a89', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit424a08ef5f2c727d7f3f1cafbdd05a89::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}