<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    public function Barang(){
        $barang = Barang::all();
        return view('admin/Barang', [
            'barang' => $barang
        ]);
    }

    public function create(Request $request){
     $format_file = $request->file('picture')->getClientOriginalName();
     $request->file('picture')->move(public_path('pictures'), $format_file);

    Barang::create([
        'name' => $request->name,
        'qty' => $request->qty,
        'price' => $request->price,
        'description' => $request->description,
        'status' => $request->status,
        'picture' => 'pictures/'.$format_file,
    ]);
    return redirect()->back();
}

public function delete ($id){

    $Barang = Barang::where('id', $id)->first();
    if ($Barang) {
        $Barang->delete();
        return redirect()->back()->with('success', 'Barang berhasil dihapus.');
    }else{
        return redirect()->back()->with('error', 'Barang tidak ditemukan.');
    }
    }

    public function update(Request $request, $id)
    {
        $Barang = Barang::findOrFail($id);
    
        $validate = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
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
    
        $status = $Barang->update($validate);
    
        if ($status) {
            return redirect()->back()->with('success', 'Barang berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui barang.');
        }
    }
}