<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{	
	 echo View::make('header') ;
	 echo View::make('home')  ;
	 echo View::make('footer') 	;
});

Route::get('/about',function(){

	echo View::make('header')	;
	echo View::make('about')	;
	echo View::make('footer')	;


}) ;

Route::get('/contact',function(){

	echo View::make('header')	;
	echo View::make('contact')	;
	echo View::make('footer')	;

})	;
