<?php

namespace Adalessa\GoogleSpreadsheets;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adalessa\GoogleSpreadsheets\Skeleton\SkeletonClass
 */
class GoogleSpreadsheetsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'google-spreadsheets';
    }
}
