<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Usaha;
use App\Models\BusinessType;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUsahaRequest;
use App\Http\Requests\UpdateUsahaRequest;
use App\Models\Pemilik;
use Illuminate\Support\Facades\Route;

class UsahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,pimpinan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usaha = new Usaha();

        $join_owners_business_type = Pemilik::join('jobs', 'owners.id', '=', 'jobs.owner_id')
        ->join('business_types', 'jobs.jenis_usaha_id', '=', 'business_types.id')
        ->select('owners.nama_pemilik', 'jobs.*', 'business_types.jenis_usaha as jenis_usaha')
        ->get();

        return view('admin.data-usaha')->with([
            'user' => Auth::user(),
            'columns' => Helper::getCountKolom($usaha->getTable()),
            'datas' => $join_owners_business_type,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsahaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsahaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Usaha::where('id', $id)->get();

        $jenis_usaha = BusinessType::all();

        return view('admin.data-usaha.edit-data-usaha')->with([
            'user' => Auth::user(),
            'data' => $data,
            'jenis_usaha' => $jenis_usaha,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsahaRequest  $request
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsahaRequest $request, Usaha $usaha)
    {
        $request->validate([
            'nama_usaha' => 'required',
            'jenis_usaha_id' => 'required',
            'lama_berdirinya_usaha' => 'required',
            'nilai_pendanaan' => 'required',
            'sumber_pendanaan' => 'required',
            'hambatan_usaha' => 'required',
        ]);

        $id_usaha = Route::getCurrentRoute()->parameter('id');

        Usaha::where('id', $id_usaha)->update([
            'nama_usaha' => $request->input('nama_usaha'),
            'jenis_usaha_id' => $request->input('jenis_usaha_id'),
            'lama_berdirinya_usaha' => $request->input('lama_berdirinya_usaha'),
            'nilai_pendanaan' => $request->input('nilai_pendanaan'),
            'sumber_pendanaan' => $request->input('sumber_pendanaan'),
            'hambatan_usaha' => $request->input('hambatan_usaha'),
        ]);

        return redirect()->route('dataUsaha')->with('success', 'Data usaha berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Usaha::findOrFail($id);
        $data->delete();

        return redirect()->route('dataUsaha')->with('success', 'Data usaha berhasil dihapus');
    }
}