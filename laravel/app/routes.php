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
	$dataTmp = UsersRepository::find(2)->update(array('status' => 2));;
	echo($dataTmp);
	$dataTmp->username = "xxx";
	$dataTmp->password = "bbbb";
	$dataTmp->save();
	echo($dataTmp);
	return "edit";
	//phpinfo();
});
Route::get('/info', function()
{
	phpinfo();
});
