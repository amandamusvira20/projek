<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $barang = Barang::where('id',$id)->first();

        return view('pesan.index',compact('barang'));
    }
    public function pesan(Request $request, $id)
    {   
        $barang = Barang::where('id',$id)->first();
        $tanggal = Carbon::now();

        //simpan ke database pesanan
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = $barang->harga*$request->jumlah_pesan;
        $pesanan->save();

        //simpan ke database detail pesanan
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $detailpesanan = new DetailPesanan;
        $detailpesanan->barang_id = $barang->id;
        $detailpesanan->pesanan_id = $pesanan_baru->id;
        $detailpesanan->jumlah = $request->jumlah_pesan;
        $detailpesanan->jumlah_harga = $barang->harga*$request->jumlah_pesan;
        $detailpesanan->save();

       



    }
}
