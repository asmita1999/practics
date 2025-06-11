<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailModel;

class DetailController extends Controller
{
    public function index()
    {
        $data = [
            [
                'name' => "Rahul Sahu",
                'phone' => "43526633",
                'email' => 'rahul@example.com',
                'is_active' => true 
            ],
            [
                'name' => "Reeta Yadav",
                'phone' => "6487388",
                'email' => 'reeta@example.com',
                'is_active' => true
            ],
            [
                'name' => "Yamini Pal",
                'phone' => "7777777",
                'email' => "yamini23@gmail.com",
                'is_active' => true
            ],
        ];

        return response()->json([
            'message' => 'Dummy data',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'is_active' => 'required|boolean'
        ]);

        $user = DetailModel::create($validatedData);

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $user
        ], 201);
    }
}
