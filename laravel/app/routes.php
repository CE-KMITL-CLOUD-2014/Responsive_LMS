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
	$dataTmp = UsersRepository::find(2)->update(array('status' => 0));;
	echo($dataTmp);
	DB::table('user')->insert(array(                      
 		 array('ID' => 3, 'username' => 'Laptop','username' => 'Laptop'
 		 	, 'title' => 'Laptop','name' => 'Laptop'
 		 	, 'surname' => 'Laptop','status' => '0')
	));      
	$obj->id=$dataTmp[0]->ID;
	$dataTmp->save();
	echo($dataTmp);
	return "edit";
	//phpinfo();
});
Route::get('/info', function()
{
	phpinfo();
});
