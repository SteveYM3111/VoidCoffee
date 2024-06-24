<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderan;
use Illuminate\Support\Facades\Auth;

class OrderanController extends Controller
{
    public function index()
    {
        $orderan = Orderan::all();
        return view('admin.orderan', ['orderan' => $orderan]);
    }
    public function create(Request $request, $id_barang)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|string|max:15',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $format_file = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(public_path('pictures'), $format_file);
    
        Orderan::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'picture' => 'pictures/' . $format_file,
            'id_user' => Auth::id(),
            'id_barang' => $id_barang,
        ]);
    
        return redirect()->back();
    }
}
