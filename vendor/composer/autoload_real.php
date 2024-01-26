<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb904c17fed8b4b59f107d38f7e2642a7
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb904c17fed8b4b59f107d38f7e2642a7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb904c17fed8b4b59f107d38f7e2642a7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb904c17fed8b4b59f107d38f7e2642a7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
