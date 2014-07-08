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

		$route1 = '/' ;
		$route2 = '/about' ;
		$route3 = '/contact' ;

		Route::get($route1, function()
		{	
			 echo View::make('header') ;
			 echo View::make('home')  ;
			 echo View::make('footer') 	;
		})	;

		Route::get($route2,function(){

			echo View::make('header')	;
			echo View::make('about')	;
			echo View::make('footer')	;


		}) ;

		Route::get($route3,function(){

			echo View::make('header')	;
			echo View::make('contact')	;
			echo View::make('footer')	;

		})	;

		

		