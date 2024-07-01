<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Bdacademy\LaravelMenu\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcategorymenu', array('as' => 'baddcategorymenu', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@addcategorypostmenu'));
    Route::post($path . '/addpostmenu', array('as' => 'baddpostmenu', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@addcategorypostmenu'));
    Route::post($path . '/addcustommenu', array('as' => 'baddcustommenu', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('as' => 'bdeleteitemmenu', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('as' => 'bdeletemenug', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnewmenu', array('as' => 'bcreatenewmenu', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@createnewmenu'));
    Route::post($path . '/generatemenucontrol', array('as' => 'bgeneratemenucontrol', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('as' => 'bupdateitem', 'uses' => '\Bdacademy\LaravelMenu\Controllers\MenuController@updateitem'));
});
