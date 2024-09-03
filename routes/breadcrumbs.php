<?php

/**
 * routes/breadcrumbs.php
 *
 */

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

// Dashboard
Breadcrumbs::for('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard'));
});


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

// Admin
Breadcrumbs::for('admin.admins.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Admin List', route('admin.admins.index'));
});

// Admin > New
Breadcrumbs::for('admin.admins.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.admins.index');
    $breadcrumbs->push('Add User', route('admin.admins.create'));
});

// Admin > Show
Breadcrumbs::for('admin.admins.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.admins.index');
    $breadcrumbs->push($data->first_name, route('admin.admins.show', $data->id));
});

// Admin > Edit
Breadcrumbs::for('admin.admins.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.admins.show', $data);
    $breadcrumbs->push('Edit ' . $data->first_name, route('admin.admins.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/

// users
Breadcrumbs::for('admin.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Users List', route('admin.users.index'));
});

// users > New
Breadcrumbs::for('admin.users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push('Add User', route('admin.users.create'));
});

// users > Show
Breadcrumbs::for('admin.users.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($data->first_name, route('admin.users.show', $data->id));
});

// users > Edit
Breadcrumbs::for('admin.users.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.show', $data);
    $breadcrumbs->push('Edit ' . $data->first_name, route('admin.users.edit', $data->id));
});



/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

// pages
Breadcrumbs::for('admin.pages.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Pages List', route('admin.pages.index'));
});

// pages > New
Breadcrumbs::for('admin.pages.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push('Add Page', route('admin.pages.create'));
});

// pages > Show
Breadcrumbs::for('admin.pages.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push($data->name, route('admin.pages.show', $data->id));
});

// pages > Edit
Breadcrumbs::for('admin.pages.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.pages.show', $data);
    $breadcrumbs->push('Edit ' . $data->name, route('admin.pages.edit', $data->id));
});
/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/

// settings
Breadcrumbs::for('admin.settings.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Users List', route('admin.settings.index'));
});





/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/

// Contact
Breadcrumbs::for('admin.contacts.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Contact List', route('admin.contacts.index'));
});

// contact > Show
Breadcrumbs::for('admin.contacts.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.contact.index');
    $breadcrumbs->push($data->name, route('admin.contacts.show', $data->id));
});
