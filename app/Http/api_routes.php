<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/


Route::resource('admin/categories', 'Admin\CategoryAPIController');



Route::resource('admin/staticPages', 'Admin\StaticPageAPIController');