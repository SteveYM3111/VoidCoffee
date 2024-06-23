<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class DataController extends Controller
{
    public function Data(){
        $data = Data::all();
        return view('admin/Data', [
            'data' => $data
        ]);
    }
    public function create(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'description' => 'nullable|in:Admin,User',
            'status' => 'required|in:Active,Not Active',
        ]);
    
        // Create the data
        Data::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'status' => $request->status,
        ]);
    
        return redirect()->back()->with('success', 'Data created successfully');
    }
    
}

