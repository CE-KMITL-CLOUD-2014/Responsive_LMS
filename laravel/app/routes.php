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

Route::get('/','Authen@showHome');
Route::get('/login', 'Authen@showLogin');
Route::get('/logout', 'Authen@logout');
Route::post('/action_login','Authen@actionlogin' );
Route::get('/admin','AdminController@showHome' );
Route::get('/admin/{page}','AdminController@showPage' );
Route::post('/admin_add/{page}','AdminController@addUser' );
Route::post('/admin_edit/{page}','AdminController@editUser' );
Route::post('/admin_delete/{page}','AdminController@deleteUser' );
Route::get('/search_admin/{method}','AdminController@searchAdmin');
Route::get('/view_edit_user_admin/{id}','AdminController@viewEditAdmin');
Route::get('/delete_user_admin/{id}','AdminController@deleteAdmin');

Route::get('/test',function(){
    $condition['word']='';
    $table = DB::table('user_admin')
            ->join('user', 'user_admin.id_user', '=', 'user.ID')->where(function($query) use($condition) {
                $query->where('user.name','like','%'.$condition['word'].'%')
                 ->orWhere('user.surname','like','%'.$condition['word'].'%')
                 ->orWhere('user_admin.position','like','%'.$condition['word'].'%');
            })->where('user_admin.status_del','=','0')->count();
	return  $table;
            
});
Route::get('/info', function(){
	phpinfo();
});

