<?php

//Auth::login(\App\User::first());
//



Route::group(['middleware' => ['web']], function ()
{
    /*
     * Socialite
     */
    Route::get('auth/google', [
        'as' => 'Google::auth_path',
        'uses' => 'Auth\AuthController@redirectToProvider'
    ]);
    Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');

    Route::group([
        'middleware' => 'guest'
    ], function ()
    {

        Route::group([
            'namespace' => 'Auth'
        ], function ()
        {
            Route::get('ingresar', [
                'as' => 'login_path',
                'uses' => 'AuthController@getLogin'
            ]);

            Route::post('ingresar', [
                'as' => 'login_path',
                'uses' => 'AuthController@postLogin'
            ]);

        });
    });

    Route::group([
        'middleware' => 'auth'
    ], function ()
    {
        Route::group([
            'namespace' => 'Auth'
        ], function ()
        {
            Route::get('salir', [
                'as' => 'logout_path',
                'uses' => 'AuthController@getLogout'
            ]);
        });
        Route::get('/', [
            'uses' => 'PageController@getHome',
            'as' => 'home_path'
        ]);
    });
});
