<?php

declare(strict_types=1);

namespace AhwetSen\AssetFiles;

final class AssetFiles
{
    /**
     * Package name.
     */
    private const PACKAGE_NAME = 'asset-files';

    /**
     * Package version.
     */
    private const PACKAGE_VERSION = 'v1.10.0';

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
