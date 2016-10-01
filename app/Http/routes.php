<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    //Simple application
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'Account@index');

        Route::get('{id}', 'Account@show');

        Route::post('create', 'Account@create');

        Route::put('{id}', 'Account@edit');

        Route::delete('{id}', 'Account@destroy');
    });


    //Test routes
    Route::get('/index', 'PagesController@index');

    Route::get('/amigos', 'PagesController@amigos');

    Route::get('/sobre', 'PagesController@sobre');

    Route::get('/foo', function () {
        return 'This method is the GET';
    });

    Route::post('/foo', function () {
        return 'This method is the POST';
    });

    Route::any('/any', function () {
        return 'This method is the any HTTP METHOD';
    });

    Route::match([
        'post',
        'delete'
    ], '/math', function () {
        return 'This method is the MATCH';
    });

    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['middleware' => ['web']], function () {
        Route::get('test-middlware', function () {
            return 'Test Middleware';
        });
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', function () {
            return 'Users list';
        });

        Route::post('add', function () {
            return 'Add user';
        });

        Route::get('{id}', function ($id) {
            return "This user is " . $id;
        });
    });



