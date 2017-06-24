<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Category;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View()->composer('layouts.header', function ($view) {
            $categories = Category::getCategoriesByParent(0);
            $view->with('categories', $categories);
        });
    }
}
