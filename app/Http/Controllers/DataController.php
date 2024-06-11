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
        // Check if the request has a file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            // Handle file upload logic here
            // e.g., move the file to the desired location
            $file->move(public_path('uploads'), $filename);
            return back()->with('success', 'File uploaded successfully');
        } else {
            return back()->with('error', 'No file uploaded');
        }


    Data::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'email_verified_at' => $request->email_verified_at,
        'description' => $request->description,
        'status' => $request->status,
    ]);
    return redirect()->back();
}
}

