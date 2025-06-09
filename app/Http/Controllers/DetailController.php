<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\DetailModel;
use phpDocumentor\Reflection\Types\Boolean;

class DetailController extends Controller
{
    public function showForm()
    {
        return view('details.form');

    }

    // Handle the form submission
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'is_active' => 'required|boolean',
        ]);

        DetailModel::create($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
