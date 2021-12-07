<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('/')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('unit-manager-account', 'AccountsController@unitManager')->name('unit-manager-account');
    Route::post('unit-manager-account', 'AccountsController@createUnitManager')->name('unit-manager-account.submit');
    Route::get('dc-manager-account', 'AccountsController@dcManager')->name('dc-manager-account');
    Route::post('dc-manager-account', 'AccountsController@createDcManager')->name('dc-manager-account.submit');
    Route::get('inf-manager-account', 'AccountsController@infManager')->name('inf-manager-account');
    Route::post('inf-manager-account', 'AccountsController@createInfManager')->name('inf-manager-account.submit');
    Route::get('dc-admin-account', 'AccountsController@dcAdmin')->name('dc-admin-account');
    Route::post('dc-admin-account', 'AccountsController@createDcAdmin')->name('dc-admin-account.submit');
    Route::get('dc-reception-account', 'AccountsController@dcReception')->name('dc-reception-account');
    Route::post('dc-reception-account', 'AccountsController@createDcReception')->name('dc-reception-account.submit');
    Route::get('reset-password', 'ManageAccountController@resetPassword')->name('reset-password');
    Route::get('remove-account', 'ManageAccountController@removeAccount')->name('remove-account');
    Route::post('suspend-account', 'AccountsController@suspendAccount')->name('admin.suspend-account');
    Route::post('restore-account', 'AccountsController@restoreAccount')->name('admin.restore-account');
    Route::get('profile', 'AdminController@myProfile')->name('admin.profile');
});



//unit manager
Route::prefix('unit-manager')->group(function(){
    Route::get('/login', 'Auth\UnitManagerLoginController@loginForm')->name('unit-manager.login');
    Route::post('/login', 'Auth\UnitManagerLoginController@login')->name('unit-manager.login.submit');
    Route::get('/request-form-is', 'ISUnitManagerController@requestForm')->name('request-form-is');
    Route::get('/all-requests', 'ISUnitManagerController@requests')->name('all-requests');
    Route::post('/request-form-is', 'ISUnitManagerController@store')->name('request-form-is.store');
    Route::get('/all-requests/{requestno}', 'ISUnitManagerController@requestDetails')->name('request-details');
    Route::post('/request-revoke', 'ISUnitManagerController@revokeRequest')->name('unit-manager.revoke-request');
});


//dc manager
Route::prefix('dc-manager')->group(function(){
    Route::get('/login', 'Auth\DCManagerLoginController@loginForm')->name('dc-manager.login');
    Route::post('/login', 'Auth\DCManagerLoginController@login')->name('dc-manager.login.submit');
    Route::get('/request-form-dc', 'DCManagerController@requestForm')->name('request-form-dc');
    Route::get('/all-requests', 'DCManagerController@requests')->name('all-requests-dc-man');
    Route::get('/all-requests/{requestno}', 'DCManagerController@requestDetails')->name('dc-request-details');
    Route::post('/all-requests/confirm', 'DCManagerController@confirmRequest')->name('dc-manager.confirm-requests');
    Route::post('/all-requests/deny', 'DCManagerController@denyRequest')->name('dc-manager.deny-requests');
});



//inf-manager
Route::prefix('inf-manager')->group(function(){
    Route::get('/login', 'Auth\InfManagerLoginController@loginForm')->name('inf-manager.login');
    Route::post('/login', 'Auth\InfManagerLoginController@login')->name('inf-manager.login.submit');
    Route::get('/request-form-inf', 'InfManagerController@requestForm')->name('request-form-inf');
    Route::get('/requests-confirmed', 'InfManagerController@requests')->name('requests-confirmed');
    Route::get('/permanent-visitors', 'InfManagerController@permanentVisitors')->name('permanent-visitors');
    Route::get('/confirmed-requests/{requestno}', 'InfManagerController@requestDetails')->name('inf-request-details');
    Route::post('/confirmed-requests/approve', 'InfManagerController@approveRequest')->name('inf-manager.approve-requests');
    Route::post('/confirmed-requests/reject', 'InfManagerController@rejectRequest')->name('inf-manager.reject-requests');
});


//dc admin
Route::prefix('dc-admin')->group(function(){
    Route::get('/login', 'Auth\DCAdminLoginController@showLoginForm')->name('dc-admin.login');
    Route::post('/login', 'Auth\DCAdminLoginController@login')->name('dc-admin.login.submit');
    Route::get('/approved-requests', 'DCAdminsController@requests')->name('approved-requests');
    Route::get('/request-form-dc-admin', 'DCAdminsController@requestForm')->name('request-form-dc-admin');
    Route::get('/all-requests/{requestno}', 'DCAdminsController@requestDetails')->name('dc-admin-request-details');
});

//dc reception
Route::prefix('dc-reception')->group(function(){
    Route::get('/login', 'Auth\DCReceptionLoginController@showLoginForm')->name('dc-reception.login');
    Route::post('/login', 'Auth\DCReceptionLoginController@login')->name('dc-reception.login.submit');
    Route::get('/approved-requests', 'DCReceptionController@requests')->name('dc-reception.approved-requests');
    Route::get('/all-requests/{requestno}', 'DCReceptionController@requestDetails')->name('dc-reception-request-details');
});


