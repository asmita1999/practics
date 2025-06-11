<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Validated;
use App\Models\DetailModel;
use App\Http\Controllers\DetailController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/detail', [DetailController::class, 'index']);
Route::post('/create_detail', [DetailController::class, 'store']);

// Route::get('/detail',function(Request $request){

//     $data=[
        
//             [
//                 'name' => "Rahul Sahu",
//                 'phone' => "43526633",
//                 'email' => 'rahul@example.com',
//                 'is_active' => true 
//             ],
//             [
//                 'name' => "Reeta Yadav",
//                 'phone' => "6487388",
//                 'email' => 'reeta@example.com',
//                 'is_active' => true
//             ],
//             [
//                 'name'=>"yamini pal",
//                 'phone'=>"7777777",
//                 'email'=>"yamini23@gmail.com",
//                 'is_active'=>true
//             ],
            
        
//         ];

//     return response()-> json([
//         'message' => 'Dummy data',
//         'data'=> $data

//     ],200);
// });


// Route::post('/create_detail', function (Request $request) {
//     $validatedData = $request->validate([
//         'name' => 'required|string',
//         'email' => 'required|email',
//         'phone' => 'required|string',
//         'is_active' => 'required|boolean'
//     ]);

//     $user = DetailModel::create($validatedData);

//     return response()->json([
//         'message' => 'Data created successfully',
//         'data' => $user
//     ], 201);
// });
