<?php

namespace App\Http\Controllers;

use Exception;
use App\Helpers\Helper;
use App\Models\Pemilik;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StorePemilikRequest;
use App\Http\Requests\UpdatePemilikRequest;

class PemilikController extends Controller
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
        $pemilik = new Pemilik();

        $dataPemilik = Pemilik::all();

        return view('admin.data-pemilik')->with([
            'user' => Auth::user(),
            'columns' => Helper::getCountKolom($pemilik->getTable()),
            'datas' => $dataPemilik
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
     * @param  \App\Http\Requests\StorePemilikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemilikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function show(Pemilik $pemilik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pemilik::where('id', $id)->get();

        $genders = ['P', 'L'];

        return view('admin.data-pemilik.edit-data-pemilik')->with([
            'user' => Auth::user(),
            'genders' => $genders,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemilikRequest  $request
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemilikRequest $request, Pemilik $pemilik)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pemilik' => 'required',
            'kota_pemilik' => 'required',
        ]);

        $id_pemilik = Route::getCurrentRoute()->parameter('id');

        Pemilik::where('id', $id_pemilik)->update([
            'nama_pemilik' => $request->input('nama_pemilik'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat_pemilik' => $request->input('alamat_pemilik'),
            'kota_pemilik' => $request->input('kota_pemilik'),
        ]);

        return redirect()->route('dataPemilik')->with('success', 'Data pemilik berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pemilik::findOrFail($id);

        try {
            if ($data) {
                $data->delete();
                return redirect()->route('dataPemilik')->with('success', 'Data pemilik berhasil dihapus');
            }
        } catch (Exception $e) {
            return back()->with('errors', 'Data pemilik tidak dapat dihapus karena masih terkait dengan data lain');
        }
    }
}