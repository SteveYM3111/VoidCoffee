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
        // Validate request inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:5', 
            'description' => 'required',
            'status' => 'required',
        ]);
        
        // Create data
        Data::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password), 
            'description' => $request->description,
            'status' => $request->status,
        ]);
    
        return redirect()->back()->with('success', 'Data created successfully');
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
