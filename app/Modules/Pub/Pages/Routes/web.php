<?php

Route::group(['prefix' => '', 'middleware' => []], function () {
    Route::get('/{alias?}', 'PagesController@index')->name('public.pages.index');

});