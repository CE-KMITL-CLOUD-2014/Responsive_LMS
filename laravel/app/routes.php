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
Route::get('/my', function()
{
	return '<h1>555</h1>'
});
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
	//$dataTmp  new Users;
	$dataTmp = Users::getFromId(2);
	$dataTmp->setUser('kuki');
	$dataTmp->update();
	//phpinfo();
});
Route::get('/info', function()
{
	phpinfo();
});
