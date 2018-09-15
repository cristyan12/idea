<?php

Route::view('/', 'home');

Route::get('mis-ideas', 'IdeaController@getIdeas');

Route::post('guardar-idea', 'IdeaController@store');
