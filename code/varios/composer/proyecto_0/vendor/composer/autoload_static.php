<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b561b0f80bc73f6d76c29200a79c766
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\Timer\\Duration' => __DIR__ . '/..' . '/phpunit/php-timer/src/Duration.php',
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/Exception.php',
        'SebastianBergmann\\Timer\\NoActiveTimerException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/NoActiveTimerException.php',
        'SebastianBergmann\\Timer\\ResourceUsageFormatter' => __DIR__ . '/..' . '/phpunit/php-timer/src/ResourceUsageFormatter.php',
        'SebastianBergmann\\Timer\\TimeSinceStartOfRequestNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/TimeSinceStartOfRequestNotAvailableException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3b561b0f80bc73f6d76c29200a79c766::$classMap;

        }, null, ClassLoader::class);
    }
}
