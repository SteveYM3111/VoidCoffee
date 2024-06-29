<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function Komentar(){
        $komentar = Komentar::all();
        return view('admin/Komentar', [
            'komentar' => $komentar
        ]);
    }


        public function create(Request $request)
        {
            // Validate request inputs
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'komentar' => 'required',
            ]);
            
            // Create data
            Komentar::create([
                'name' => $request->name,
                'email' => $request->email,
                'komentar' => $request->komentar,
            ]);
        
            return redirect()->back()->with('success', 'Komentar Berhasil Dikirim');
        }
}
