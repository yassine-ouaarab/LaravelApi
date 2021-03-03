<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*Route::get('/listpersons', [PersonController::class, 'index']);
Route::post('/addperson', [PersonController::class, 'store']);
Route::put('/updateperson/{id}', [PersonController::class, 'update']);
Route::delete('/deleteperson/{id}', [PersonController::class, 'delete']);
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});


/////////////////// Employee APIs ////////////////////

// Get all Employees
Route::get('Employees', 'EmployeeController@getEmployees');

// Get Employee by id
Route::get('Employee/{id}', 'EmployeeController@getEmployeeById');

// Add new Employee
Route::post('AddEmployee', 'EmployeeController@AddEmployee');

// Update Employee
Route::put('UpdateEmployee/{id}', 'EmployeeController@UpdateEmployee');

// Delete Employee
Route::Delete('DeleteEmployee/{id}', 'EmployeeController@DeleteEmployee');


/////////////////// Person APIs ////////////////////

// Get all Person
Route::get('People', 'PersonController@getPeople');

// Get Person by id
Route::get('Person/{id}', 'PersonController@getPersonById');

// Add new Person
Route::post('AddPerson', 'PersonController@AddPerson');

// Update Person
Route::put('UpdatePerson/{id}', 'PersonController@UpdatePerson');

// Delete Person
Route::Delete('DeletePerson/{id}', 'PersonController@DeletePerson');


/////////////////// Product APIs ////////////////////

// Get all Product
Route::get('Products', 'ProductController@getProducts');

// Get Product by id
Route::get('Product/{id}', 'ProductController@getProductsById');

// Add new Product
Route::post('AddProduct', 'ProductController@AddProduct');

// Update Product
Route::put('UpdateProduct/{id}', 'ProductController@UpdateProduct');

// Delete Product
Route::Delete('DeleteProduct/{id}', 'ProductController@DeleteProduct');

