<?php

Route::group(['prefix' => 'contacts', 'middleware' => []], function () {
    Route::get('/', 'Api\ContactController@index')->name('api.contacts.index');
    Route::post('/', 'Api\ContactController@store')->name('api.contacts.store');
    Route::get('/{contact}', 'Api\ContactController@show')->name('api.contacts.read');
    Route::put('/{contact}', 'Api\ContactController@update')->name('api.contacts.update');
    Route::delete('/{contact}', 'Api\ContactController@destroy')->name('api.contacts.delete');
});