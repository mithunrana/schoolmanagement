<?php

/*Route::get('/', function () {
    return view('welcome');
});*/


//======================Admin Site Start Here====================//
Auth::routes();



Route::get('/add-subject-semester','semester@semesterSubjectManage');
Route::get('/semester-store','semester@semesterSubjectManage');
Route::post('/subject-store','subjects@subjectStore');
Route::post('/subject-update','subjects@subjectUpdate');
Route::get('/subject-list','subjects@subjectList');
Route::post('/semester-store','semester@semesterStore');
Route::post('/semester-update','semester@semesterUpdate');
Route::get('/semester-list','semester@semesterList');


Route::get('/manage-student','student@studentManage');
Route::post('/store-student','student@storeStudent');
Route::get('/edit-student/{id}','student@editStudent');
Route::get('/update-student/{id}','student@updateStudent');


Route::get('category','Blog@category');
Route::post('category-store','Blog@categoryStore');
Route::post('category-update','Blog@categoryUpdate');
Route::get('categorylist','Blog@getAllCategory');
Route::post('category-delete','Blog@categoryDelete');
Route::post('blogposted-category-store','Blog@blogPostedCategoryStore');


Route::get('profile-create/','ProfileController@createPorfile');
Route::post('profile-store/','ProfileController@profileStore');
Route::get('login-page/','ProfileController@login');
Route::post('checklogin/','ProfileController@checkLogin');
Route::get('successlogin/','ProfileController@sucessLogin');
//======================Admin Site End Here====================//















