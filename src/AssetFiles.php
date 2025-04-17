<?php

namespace AhwetSen\AssetFiles;

class AssetFiles
{
    /**
     * Package name.
     */
    private const PACKAGE_NAME = 'asset-files';

    /**
     * Package version.
     */
    private const PACKAGE_VERSION = 'v1.1.0';

    /**
     * Package name.
     */
    public static function packageName(): string
    {
        return self::PACKAGE_NAME;
    }

    /**
     * Package version.
     */
    public static function packageVersion(): string
    {
        return self::PACKAGE_VERSION;
    }

    /**
     * Config value.
     */
    public static function configValue(string $configKeyName = 'package_information.name'): mixed
    {
        return config(self::packageName().'.'.$configKeyName);
    }
}
