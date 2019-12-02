<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

///Routes of shop
Route::get('shops', ['uses' => 'ShopController@getAllShops']);
Route::post('shop', ['uses' => 'ShopController@postShop']);
Route::post('shop/assignCategory', ['uses' => 'ShopController@assignCategory']);
Route::get('shop/{shopId}', ['uses' => 'ShopController@getShop']);
Route::put('shop/{shopId}', ['uses' => 'ShopController@putShop']);
Route::delete('shop/{shopId}', ['uses' => 'ShopController@deleteShop']);

///Routes of categories
Route::get('categories', ['uses' => 'CategoryController@getAllCategories']);
Route::post('category', ['uses' => 'CategoryController@postCategory']);
Route::get('category/{categoryId}', ['uses' => 'CategoryController@getCategory']);
Route::put('category/{categoryId}', ['uses' => 'CategoryController@putCategory']);
Route::delete('category/{categoryId}', ['uses' => 'CategoryController@deleteCategory']);

///Routes of products
Route::get('products', ['uses' => 'ProductController@getAllProducts']);
Route::post('product', ['uses' => 'ProductController@postProduct']);
Route::get('product/{productId}', ['uses' => 'ProductController@getProduct']);
Route::put('product/{productId}', ['uses' => 'ProductController@putProduct']);
Route::delete('product/{productId}', ['uses' => 'ProductController@deleteProduct']);
Route::post('product/assignUnits', ['uses' => 'ProductController@assignUnits']);

///Routes of unit
Route::get('units', ['uses' => 'UnitController@getAllUnits']);
Route::post('unit', ['uses' => 'UnitController@postUnit']);
Route::get('unit/{unitId}', ['uses' => 'UnitController@getUnit']);
Route::put('unit/{unitId}', ['uses' => 'UnitController@putUnit']);
Route::delete('unit/{unitId}', ['uses' => 'UnitController@deleteUnit']);
