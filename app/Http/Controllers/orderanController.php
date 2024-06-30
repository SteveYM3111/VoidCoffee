<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderan;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

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
            'price' => $request->price,  // Tambahkan field price
        ]);
    
        return redirect()->back();
    }
    

    public function cetakResi($id_orderan)
    {
        $orderan = Orderan::with('user', 'barang')->where('id_orderan', $id_orderan)->first();
        $data = [
            'nama_penyewa' => $orderan->user->name,
            'no_handphone' => $orderan->user->whatsapp,
            'barang' => $orderan->barang->name,
            'alamat' => $orderan->user->address, // Assuming user has an address field
            'jumlah_sewa' => $orderan->created_at,
            'total_harga' => $orderan->barang->price, // Assuming barang has a price field
            'no_pesanan' => $orderan->id_orderan,
        ];

        $pdf = Pdf::loadView('resi', $data);
        return $pdf->download('Resi.pdf');
    }
}
