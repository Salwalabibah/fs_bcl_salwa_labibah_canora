<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Exception;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     try {
        //         $columns = array(
        //             0 => 'id',
        //             1 => 'nomor_kendaraan',
        //             2 => 'jenis_kendaraan',
        //             3 => 'status_ketersediaan',
        //             4 => 'kapasitas_muatan',
        //         );

        //         $query = Armada::query();

        //         $totalData = $query->count();
        //         $totalFiltered = $totalData;

        //         $limit = $request->input('length', 10);
        //         $start = $request->input('start', 0);
        //         $order = $columns[$request->input('order.0.column', 'id')];
        //         $dir = $request->input('order.0.dir', 'asc');

        //         if (!empty($request->input('search.value'))) {
        //             $search = $request->input('search.value');

        //             $query->where(function ($q) use ($search) {
        //                 $q->where('nomor_kendaraan', 'LIKE', "%{$search}%")
        //                     ->orWhere('jenis_kendaraan', 'LIKE', "%{$search}%")
        //                     ->orWhere('status_ketersediaan', 'LIKE', "%{$search}%")
        //                     ->orWhere('kapasitas_muatan', 'LIKE', "%{$search}%");
        //             });

        //             $totalFiltered = $query->count();
        //         }

        //         $armadas = $query->orderBy($order, $dir)
        //             ->offset($start)
        //             ->limit($limit)
        //             ->get();

        //         $armadas = $armadas->map(function ($armada) {
        //             $armada->action = (string) view('armada.action', [
        //                 'item' => $armada
        //             ]);

        //             return $armada;
        //         });
        //     } catch (Exception $e) {
        //         return $e;
        //     }

        //     $json_data = array(
        //         "draw" => intval($request->input('draw')),
        //         "recordsTotal" => intval($totalData),
        //         "recordsFiltered" => intval($totalFiltered),
        //         "data" => $armadas
        //     );

        //     return json_encode($json_data);
        // }

        $armada = Armada::all();
        return view('armada.index', compact('armada'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('armada.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_kendaraan' => 'required|min:9',
            'jenis_kendaraan' => 'required',
            'status_ketersediaan' => 'required',
            'kapasitas_muatan' => 'required|integer'
        ]);

        Armada::create($request->all());
        return redirect()->route('armada.index')->with('success', 'Armada berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Armada $armada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Armada $armada)
    {
        return view('armada.edit', compact('armada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Armada $armada)
    {
        $request->validate([
            'nomor_kendaraan' => 'required|min:9',
            'jenis_kendaraan' => 'required',
            'status_ketersediaan' => 'required',
            'kapasitas_muatan' => 'required|integer'
        ]);

        $armada->update($request->all());

        return redirect()->route('armada.index')->with('success', 'Armada berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Armada $armada)
    {
        $armada = Armada::findOrFail($armada);
        $armada->delete();

        return redirect()->route('armada.index')->with('success', 'Armada berhasil dihapus');
    }
}
