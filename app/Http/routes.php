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
//require_once '../vendor/fzaninotto/faker/src/autoload.php';

Route::get('/', 'HomeController@index');


Route::get('/books/{category}', function ($category) {
    return 'here are all the books in the category of ' . $category;
});

Route::get('/home', 'HomeController@index');


Route::get('/tag', 'TagController@index');
Route::get('/tag/create', 'TagController@create');
Route::post('/tag', 'TagController@store');
Route::get('/tag/{tag_id}', 'TagController@show');
Route::get('/tag/{tag_id}/edit', 'TagController@edit');
Route::put('/tag/{tag_id}', 'TagController@update');
Route::delete('/tag/{tag_id}', 'TagController@destroy');
//Route::resource('tag', 'TagController'); actually includes
//all of the previous tagcontroller lines in one call

Route::resource('/user-generator', 'UserGeneratorController');
Route::resource('/lorem-ipsum', 'LoremIpsumController');
Route::resource('/password-generator', 'PasswordGeneratorController');

//Route::get('/user-generator',  'UserGeneratorController@index');
//Route::post('/user-generator', array('uses' => 'UserGeneratorController@reload'));
//Route::post('/user-generator', 'UserGeneratorController@reload');
/*
Route::post('/user-generator', function() {
  $faker = \Faker\Factory::create();

  return $faker->name . " " . $faker->address;
});
*/
