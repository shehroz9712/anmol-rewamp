<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as LaravelRoute;
use Illuminate\Support\Facades\Log;

class RoutePermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Ensure routes are loaded before applying middleware
        $this->mapDynamicPermissions();
    }

    protected function mapDynamicPermissions()
    {
        Log::info('Mapping dynamic permissions started.');

        $routePermissions = [
            'roles.index' => 'role list',
            'roles.create' => 'role create',
            'roles.store' => 'role create',
            'roles.edit' => 'role edit',
            'roles.update' => 'role edit',
            'roles.destroy' => 'role delete',
            // Add more routes and their corresponding permissions
        ];

        foreach ($routePermissions as $routeName => $permission) {
            $this->applyMiddlewareToRoute('user.' . $routeName, $permission);
        }

        Log::info('Mapping dynamic permissions completed.');
    }

    protected function applyMiddlewareToRoute(string $routeName, string $permission)
    {
        Log::info('Applying middleware', ['routeName' => $routeName, 'permission' => $permission]);

        $routes = Route::getRoutes();

        foreach ($routes as $route) {
            if ($route->getName() === $routeName) {
                $existingMiddleware = $route->middleware();
                $newMiddleware = array_merge($existingMiddleware, ["check.permission:{$permission}"]);

                Log::info('Current middleware', ['middleware' => $existingMiddleware]);
                Log::info('Adding middleware', ['newMiddleware' => $newMiddleware]);

                $route->middleware($newMiddleware);

                Log::info('Middleware applied', ['route' => $routeName, 'middleware' => $newMiddleware]);
            }
        }
    }
}
