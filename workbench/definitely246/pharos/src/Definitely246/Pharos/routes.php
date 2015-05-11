<?php

Route::group(['prefix' => 'pharos'], function()
{
	Route::get('/', ['uses' => 'Definitely246\Pharos\Controllers\Controller@index', 'as' => 'pharos.home']);

	Route::get('analytics', ['uses' => 'Definitely246\Pharos\Controllers\Analytics@index', 'as' => 'pharos.analytics.index']);

	Route::resource('filters', 'Definitely246\Pharos\Controllers\Filters');

	Route::patch('resources/{resourceId}/schema', 'Definitely246\Pharos\Controllers\Schemas@patch');

	Route::resource('resources', 'Definitely246\Pharos\Controllers\Resources');
});
