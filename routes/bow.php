<?php

Route::group([
    'middleware' => 'web',
    'namespace' => 'Zelf\Bow\Routes',
], function ($router) {
    if (!Illuminate\Support\Facades\Schema::hasTable('pages')) {
        return;
    }

    foreach (TCG\Voyager\Models\Page::all() as $page){
        $router->get($page->slug, ['as' => $page->name, function() use ($page, $router){
            return $this->app->call('Zelf\Bow\Http\Controllers\PageController@show', [
                'page' => $page,
                'parameters' => $router->current()->parameters(),
            ]);
        }]);
    }
});