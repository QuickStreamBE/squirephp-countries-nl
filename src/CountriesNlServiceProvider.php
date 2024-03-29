<?php

namespace Squire;

use Illuminate\Support\ServiceProvider;
use Squire\Models\Country;

class CountriesNlServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Repository::registerSource(Country::class, 'nl', __DIR__ . '/../resources/data.csv');
    }
}
