<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfdb1c3adb534d9eec6536308f14279a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'XMLSchema' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_base' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_client' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_fault' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_parser' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_server' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_wsdlcache' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_xmlschema' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_fault' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_parser' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_server' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_transport_http' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soapclient' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soapval' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'wsdl' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'wsdlcache' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbfdb1c3adb534d9eec6536308f14279a::$classMap;

        }, null, ClassLoader::class);
    }
}
