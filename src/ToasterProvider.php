<?php

namespace SabinChacko\Toaster;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use SabinChacko\Toaster\Toaster;

class ToasterProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/views', 'toaster');

        Livewire::component('toaster', Toaster::class);
    }
}
