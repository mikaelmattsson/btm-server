<?php

namespace App\HighScore\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\HighScore\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::group([
            'middleware' => ['web'],
            'namespace'  => $this->namespace,
        ], function (Router $router) {

            $router->get('/high-score/list', 'ListController@list');
            $router->post('/high-score/submit', 'SubmitController@submit');

        });
    }

}
