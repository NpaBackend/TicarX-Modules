<?php

namespace TicarX\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use TicarX\Modules\Contracts\RepositoryInterface;
use TicarX\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
