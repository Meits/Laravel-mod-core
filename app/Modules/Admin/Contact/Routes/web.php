<?php

Route::group(['prefix' => 'contacts', 'middleware' => []], function () {
    Route::get('/', 'ContactController@index')->name('contacts.index');
    Route::get('/create', 'ContactController@create')->name('contacts.create');
    Route::post('/', 'ContactController@store')->name('contacts.store');
    Route::get('/{contact}', 'ContactController@show')->name('contacts.read');
    Route::get('/edit/{contact}', 'ContactController@edit')->name('contacts.edit');
    Route::put('/{contact}', 'ContactController@update')->name('contacts.update');
    Route::delete('/{contact}', 'ContactController@destroy')->name('contacts.delete');
});