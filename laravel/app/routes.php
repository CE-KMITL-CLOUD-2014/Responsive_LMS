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
Route::get('/my', 'ExampleTest@testBasicExample');
Route::get('/', function()
{
	/*$data=Users::getFromId(1);
	if($data!=NULL){
		//return(var_dump($data));
		$data->setStatus(1);
		$state=$data->update();
		return(var_dump($state));

	}
	else{
		return 'NULL';
	}*/
	$dataTmp = new UsersRepository;
	var_dump($dataTmp);
	$dataTmp->ID = 2;
	$dataTmp->username = "NULL";
	$dataTmp->password = "NULL";
	$dataTmp->title = "NULL";
	$dataTmp->name = "NULL";
	$dataTmp->surname = "NULL";
	$dataTmp->status = 1;
	$dataTmp->save();
	return "create"
	//phpinfo();
});
Route::get('/info', function()
{
	phpinfo();
});
