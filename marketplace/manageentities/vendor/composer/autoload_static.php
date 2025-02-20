<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd60b6fa158c608a365529f827f1ed1c4
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd60b6fa158c608a365529f827f1ed1c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd60b6fa158c608a365529f827f1ed1c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd60b6fa158c608a365529f827f1ed1c4::$classMap;

        }, null, ClassLoader::class);
    }
}
