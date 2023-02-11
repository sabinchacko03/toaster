# Laravel Livewire Toaster
[![Packagist Version](https://img.shields.io/packagist/v/sabinchacko/toaster)](https://packagist.org/packages/sabinchacko/toaster)
[![Total Downloads](https://img.shields.io/packagist/dt/sabinchacko/toaster)](https://packagist.org/packages/sabinchacko/toaster)
[![License](https://img.shields.io/packagist/l/sabinchacko/toaster)](https://packagist.org/packages/sabinchacko/toaster)

Laravel Livewire Toaster is a simple toaster for laravel redirections with flash messages.

## Installation

You can install the package via composer:

```bash
composer require sabinchacko/toaster
```

## Requirements

This package uses `livewire/livewire` (https://laravel-livewire.com/) under the hood.

It also uses TailwindCSS (https://tailwindcss.com/) for base styling. 

Please make sure you include both of this dependencies before using this component. 

## Usage

In order to use this component, you must include `@livewireStyles` and `@livewireScripts` in the page as we normally use livewire.

then,

You can use `@livewire('toaster')` or `<livewire:toaster />` to see the Toaster in that page.

Any redirections to that page with flashed messages (success, fail, warning) will show the toaster for 3 seconds.

## Example

`return redirect('index')->with('success', 'This is the toasted message.');`

currently the package supports 3 types of messages `success`, `fail` and `warning`
