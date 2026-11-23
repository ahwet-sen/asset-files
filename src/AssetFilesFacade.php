<?php

declare(strict_types=1);

namespace AhwetSen\AssetFiles;

use Illuminate\Support\Facades\Facade;

final class AssetFilesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'asset-files';
    }
}
