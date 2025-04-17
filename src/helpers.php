<?php

use AhwetSen\AssetFiles\AssetFiles;
use Illuminate\Support\Str;

if (! function_exists('assetFilesPackageName')) {
    /**
     * Asset files package name.
     */
    function assetFilesPackageName(): string
    {
        return AssetFiles::packageName();
    }
}

if (! function_exists('assetFilesPackageVersion')) {
    /**
     * Asset files package version.
     */
    function assetFilesPackageVersion(): string
    {
        return AssetFiles::packageVersion();
    }
}

if (! function_exists('assetFilesConfigValue')) {
    /**
     * Asset files config value.
     */
    function assetFilesConfigValue(string $configKeyName = 'package_information.name'): mixed
    {
        return AssetFiles::configValue($configKeyName);
    }
}

if (! function_exists('assetFilesPackageInformation')) {
    /**
     * Asset files package information.
     */
    function assetFilesPackageInformation(?string $packageInformationKey = null): mixed
    {
        if ($packageInformationKey === null) {
            return assetFilesConfigValue('package_information');
        }

        $packageInformationKey = Str::of($packageInformationKey)->trim()->lower()->snake();

        return assetFilesConfigValue('package_information.'.$packageInformationKey);
    }
}

if (! function_exists('AssetFilesOptimizationCommands')) {
    /**
     * Asset files optimization commands.
     */
    function assetFilesOptimizationCommands(): mixed
    {
        return assetFilesConfigValue('optimization_commands');
    }
}

if (! function_exists('assetFilesPackageCommands')) {
    /**
     * Asset files package commands.
     */
    function assetFilesPackageCommands(?string $packageCommandKey = null): mixed
    {
        if ($packageCommandKey === null) {
            return assetFilesConfigValue('package_commands');
        }

        $packageCommandKey = Str::of($packageCommandKey)->trim()->lower()->snake();

        return assetFilesConfigValue('package_commands.'.$packageCommandKey);
    }
}

if (! function_exists('assetFilesSeperator')) {
    /**
     * Asset files seperator.
     */
    function assetFilesSeperator(): mixed
    {
        return assetFilesConfigValue('seperator');
    }
}

if (! function_exists('assetFilesSeperatorLength')) {
    /**
     * Asset files seperator length.
     */
    function assetFilesSeperatorLength(): mixed
    {
        return assetFilesConfigValue('seperator_length');
    }
}
