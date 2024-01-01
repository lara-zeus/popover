<?php

namespace LaraZeus\Popover;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PopoverServiceProvider extends PackageServiceProvider
{
    public static string $name = 'zeus-popover';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }
}
