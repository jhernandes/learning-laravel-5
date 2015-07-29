<?php

namespace App\Providers;

use App\Article;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getLastArticleForNavBar();

        $this->getAllTagsForSideBar();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the Last published Article For Navbar.
     *
     */
    private function getLastArticleForNavBar()
    {
        view()->composer('partials.nav', function ($view) {
            $view->with('latest', Article::latest()->published()->first());
        });
    }

    /**
     * Get All Tags Globally.
     */
    private function getAllTagsForSideBar()
    {
        view()->composer('article.partials.tags', function ($view) {
            $view->with('tags', Tag::all());
        });
    }
}
