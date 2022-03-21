<?php

namespace RyanChandler\BladeInDirective;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BladeInDirectiveServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('blade-in-directive');
    }

    public function packageBooted()
    {
        Blade::if('in', static function (mixed $needle, array $haystack, bool $strict = false): bool {
            $needles = Arr::wrap($needle);

            foreach ($needles as $needle) {
                if (! in_array($needle, $haystack, $strict)) {
                    return false;
                }
            }

            return true;
        });
    }
}
