<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderan;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

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
            'price' => 'required',
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
            'no_resi' => Str::random(10),
        ]);

        return redirect()->back();
    }


    public function cetakResi($id_orderan)
    {
        $orderan = Orderan::with('user', 'barang')->where('id_orderan', $id_orderan)->first();
        $data = [
            'nama_pembeli' => $orderan->name,
            'no_handphone' => $orderan->whatsapp,
            'barang' => $orderan->barang->name,
            'tanggal_pembelian' => $orderan->created_at,
            'harga' => $orderan->price, // Assuming barang has a price field
            'no_pesanan' => $orderan->id_orderan,
            'no_resi' => $orderan->no_resi,
        ];

        $pdf = Pdf::loadView('resi', $data);
        return $pdf->download('Resi.pdf');
    }
}
