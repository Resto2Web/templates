<?php

namespace Resto2web\Templates;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Resto2web\Templates\Skeleton\SkeletonClass
 */
class TemplatesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'templates';
    }
}
