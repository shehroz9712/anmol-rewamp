<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->composeAdminPages();
        $site_settings = Setting::first();
        View::share(['setting' => $site_settings]);
    }

    function composeAdminPages()
    {
        /*
         * user
         */
        view()->composer('admin.users.index', function ($view) {
            $view->with(['pageTitle' => ' Users List']);
        });
        view()->composer('admin.users.create', function ($view) {
            $view->with(['pageTitle' => 'Add User User']);
        });
        view()->composer('admin.users.show', function ($view) {
            $view->with(['pageTitle' => 'Show User User']);
        });
        view()->composer('admin.users.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit User  ']);
        });
        /*
         * page
         */
        view()->composer('admin.pages.index', function ($view) {
            $view->with(['pageTitle' => ' Pages List']);
        });
        view()->composer('admin.pages.create', function ($view) {
            $view->with(['pageTitle' => 'Add Page Page']);
        });
        view()->composer('admin.pages.show', function ($view) {
            $view->with(['pageTitle' => 'Show Page Page']);
        });
        view()->composer('admin.pages.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Page  ']);
        });
        /*
         * admin
         */
        view()->composer('admin.admins.index', function ($view) {
            $view->with(['pageTitle' => ' Admins List']);
        });
        view()->composer('admin.admins.create', function ($view) {
            $view->with(['pageTitle' => 'Add Admin Admin']);
        });
        view()->composer('admin.admins.show', function ($view) {
            $view->with(['pageTitle' => 'Show Admin Admin']);
        });
        view()->composer('admin.admins.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Admin  ']);
        });
        /*
        * Settings
        */
        view()->composer('admin.settings.index', function ($view) {
            $view->with(['pageTitle' => 'Settings List']);
        });
        view()->composer('admin.settings.create', function ($view) {
            $view->with(['pageTitle' => 'Add Setting']);
        });
        view()->composer('admin.settings.show', function ($view) {
            $view->with(['pageTitle' => 'Show Setting']);
        });
        view()->composer('admin.settings.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Setting']);
        });


        /*
         * Contact
         */
        view()->composer('admin.contacts.index', function ($view) {
            $view->with(['pageTitle' => ' Contact List']);
        });

        view()->composer('admin.contacts.show', function ($view) {
            $view->with(['pageTitle' => 'Show Pixel']);
        });
    }
}
