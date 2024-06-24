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
            $file->move(public_path('uploads'), $filename);
            return back()->with('success', 'File uploaded successfully');
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

    public function update(Request $request, $id_user)
    {
        $data = Data::findOrFail($id_user);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data->picture = 'uploads/' . $filename;
        }

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function deletePengguna($id_user)
    {
        $user = Data::findOrFail($id_user);
        $user->delete();
        
        return redirect()->route('data.index')->with('success', 'Data User berhasil dihapus');
    }
    
    
    

}
