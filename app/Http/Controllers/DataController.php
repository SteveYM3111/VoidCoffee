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

    public function create(Request $request){
     $format_file = $request->file('picture')->getClientOriginalName();
     $request->file('picture')->move(public_path('pictures'), $format_file);

    Data::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'description' => $request->description,
        'status' => $request->status,
        'picture' => 'pictures/'.$format_file,
    ]);
    return redirect()->back();
}

public function delete ($id){

    $Data = Data::where('id', $id)->first();
    if ($Data) {
        $Data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }else{
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }
    }

    public function update(Request $request, $id)
    {
        $Data = Data::findOrFail($id);
    
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'status' => 'required',
            'picture' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // If a new picture is uploaded
        if ($request->hasFile('picture')) {
            $format_file = $request->file('picture')->getClientOriginalName();
            $request->file('picture')->move(public_path('pictures'), $format_file);
            $validate['picture'] = 'pictures/' . $format_file;
        } else {
            // If no new picture is uploaded, keep the old picture
            unset($validate['picture']);
        }
    
        $status = $Data->update($validate);
    
        if ($status) {
            return redirect()->back()->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui barang.');
        }
    }
}

