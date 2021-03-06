<?php

use App\Http\Controllers\AuthorsController;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
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

// Route::get('/test', function (Request $request) {
//     return 'Authicated';
// });
Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    // Route::get('/authors/{author}', [AuthorsController::class,'show']);
    // Route::get('/authors', [AuthorsController::class,'index']);
    Route::apiResource('/authors', AuthorsController::class);
});




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
