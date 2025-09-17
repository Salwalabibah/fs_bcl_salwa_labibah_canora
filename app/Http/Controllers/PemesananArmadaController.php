<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\PemesananArmada;
use Illuminate\Http\Request;

class PemesananArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pesanan = PemesananArmada::all();
        return view('pemesanan-armada.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $armada = Armada::where('status_ketersedian', 1)->get();
        return view('pemesanan-armada.create', compact('armada'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kendaraan' => 'required',
            'tanggal_pemesanan' => 'required|date',
            'detail' => 'required',
            'nama' => 'required'
        ]);

        $armada = Armada::where('jenis_kendaraan', $request->jenis_kedaraan)->first();
        if (!$armada) {
            return back()->withErrors(['error' => 'Armada sedang tidak tersedia']);
        }

        PemesananArmada::create(
            [
                'armada_id' => $armada->id,
                'jenis_kendaraan' => $request->jenis_kendaraan,
                'tanggal_pemesanan' => $request->tanggal_pemesanan,
                'detail_barang' => $request->detail,
                'pemesan_name' => $request->nama
            ]
        );

        $armada->update(['status_ketersedian' => 0]);

        return redirect()->route('pemesanan-armada.index')->with('success', 'Armada berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PemesananArmada $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PemesananArmada $pemesanan)
    {
        $armada = Armada::where('status_ketersedian', 1)->get();
        return view('pemesanan-armada.edit', compact('pemesanan', 'armada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PemesananArmada $pemesanan)
    {
        $request->validate([
            'jenis_kendaraan' => 'required',
            'tanggal_pemesanan' => 'required|date',
            'detail' => 'required',
            'nama' => 'required'
        ]);

        $pemesanan->update($request->all());

        return redirect()->route('pemesanan-armada.index')->with('success', 'Armada berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PemesananArmada $pemesanan)
    {
        $pemesanan->delete();
        return redirect()->route('pemesanan-armada.index')->with('success', 'Armada berhasil dihapus');
    }
}
