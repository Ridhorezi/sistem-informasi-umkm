<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use App\Models\Usaha;
use App\Helpers\Helper;
use App\Models\Pemilik;
use App\Models\BusinessType;
use Illuminate\Http\Request;
use App\Exports\DataTableExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreUMKMRequest;
use App\Http\Requests\UpdateUMKMRequest;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class UMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umkm.index');
    }

    public function registrasi()
    {
        $jenis_usahas = BusinessType::all();

        return view('umkm.registrasi', compact('jenis_usahas'))->with('active', 'pendaftaran');
    }

    public function contact()
    {
        return view('umkm.contact')->with('active', 'contact');
    }

    public function about()
    {
        return view('umkm.about')->with('active', 'about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_usahas = BusinessType::all();

        return view('admin.data-umkm.tambah-data-umkm', compact('jenis_usahas'))->with('user', Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUMKMRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUMKMRequest $request)
    {
        $request->validate([

            //Data Pemilik
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pemilik' => 'required',
            'kota_pemilik' => 'required',

            //Data Usaha
            'nama_usaha' => 'required',
            'jenis_usaha_id' => 'required',
            'lama_berdirinya_usaha' => 'required',
            'nilai_pendanaan' => 'required',
            'sumber_pendanaan' => 'required',
            'hambatan_usaha' => 'required',
        ]);

        //Data Pemilik
        $pemilik = new Pemilik();

        $dataPemilik = Helper::checkTable($pemilik);

        $id_pemilik = Helper::getLastIdFromTable($pemilik);

        if (is_null($dataPemilik)) {
            $pemilik->id = 1;
        }

        $pemilik->id = $id_pemilik;
        $pemilik->nama_pemilik = $request->input('nama_pemilik');
        $pemilik->jenis_kelamin = $request->input('jenis_kelamin');
        $pemilik->alamat_pemilik = $request->input('alamat_pemilik');
        $pemilik->kota_pemilik = $request->input('kota_pemilik');

        //Data Jenis Usaha
        $jenis_usaha = new BusinessType();

        $jenisUsaha = Helper::checkTable($jenis_usaha);

        $id_jenis_usaha = Helper::getLastIdFromTable($jenis_usaha);

        if (is_null($jenisUsaha)) {
            $jenis_usaha->id = 1;
        }

        //Data Usaha
        $usaha = new Usaha();

        $data_usaha = Helper::checkTable($usaha);

        $id_usaha = Helper::getLastIdFromTable($usaha);

        if (is_null($data_usaha)) {
            $usaha->id = 1;
        }

        $usaha->id = $id_usaha;
        $usaha->owner_id = $id_pemilik;
        $usaha->nama_usaha = $request->input('nama_usaha');
        $usaha->jenis_usaha_id = $request->input('jenis_usaha_id');
        $usaha->lama_berdirinya_usaha = $request->input('lama_berdirinya_usaha');
        $usaha->nilai_pendanaan = $request->input('nilai_pendanaan');
        $usaha->sumber_pendanaan = $request->input('sumber_pendanaan');
        $usaha->hambatan_usaha = $request->input('hambatan_usaha');

        try {
            $pemilik->save();
            $pemilik->usaha()->save($usaha);
            return redirect('/tambah-data-umkm')->with('success', 'Data UMKM berhasil ditambah');
        } catch (Exception $e) {
            return redirect('/tambah-data-umkm')->with('errors', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function show(UMKM $uMKM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function edit(UMKM $uMKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUMKMRequest  $request
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUMKMRequest $request, UMKM $uMKM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(UMKM $uMKM)
    {
        //
    }

    public function downloadUMKM()
    {
        $datas = Pemilik::join('jobs', 'owners.id', '=', 'jobs.owner_id')
            ->select('owners.*', 'jobs.*')
            ->get();

        return view('admin.data-umkm')->with([
            'user' => Auth::user(),
            'datas' => $datas
        ]);
    }

    public function exportToExcel(Request $request)
    {
        $tahun_download = $request->input('tahun_download');

        return Excel::download(new DataTableExport($tahun_download), 'data-umkm-rbc-' . now() . '.xlsx');
    }

    // Register UMKM user
    public function tambahUmkm(StoreUMKMRequest $request)
    {
        $request->validate([

            //Data Pemilik
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pemilik' => 'required',
            'kota_pemilik' => 'required',

            //Data Usaha
            'nama_usaha' => 'required',
            'jenis_usaha_id' => 'required',
            'lama_berdirinya_usaha' => 'required',
            'nilai_pendanaan' => 'required',
            'sumber_pendanaan' => 'required',
            'hambatan_usaha' => 'required',
        ]);

        //Data Pemilik
        $pemilik = new Pemilik();

        $dataPemilik = Helper::checkTable($pemilik);

        $id_pemilik = Helper::getLastIdFromTable($pemilik);

        if (is_null($dataPemilik)) {
            $pemilik->id = 1;
        }

        $pemilik->id = $id_pemilik;
        $pemilik->nama_pemilik = $request->input('nama_pemilik');
        $pemilik->jenis_kelamin = $request->input('jenis_kelamin');
        $pemilik->alamat_pemilik = $request->input('alamat_pemilik');
        $pemilik->kota_pemilik = $request->input('kota_pemilik');

        //Data Jenis Usaha
        $jenis_usaha = new BusinessType();

        $jenisUsaha = Helper::checkTable($jenis_usaha);

        $id_jenis_usaha = Helper::getLastIdFromTable($jenis_usaha);

        if (is_null($jenisUsaha)) {
            $jenis_usaha->id = 1;
        }

        //Data Usaha
        $usaha = new Usaha();

        $data_usaha = Helper::checkTable($usaha);

        $id_usaha = Helper::getLastIdFromTable($usaha);

        if (is_null($data_usaha)) {
            $usaha->id = 1;
        }

        $usaha->id = $id_usaha;
        $usaha->owner_id = $id_pemilik;
        $usaha->nama_usaha = $request->input('nama_usaha');
        $usaha->jenis_usaha_id = $request->input('jenis_usaha_id');
        $usaha->lama_berdirinya_usaha = $request->input('lama_berdirinya_usaha');
        $usaha->nilai_pendanaan = $request->input('nilai_pendanaan');
        $usaha->sumber_pendanaan = $request->input('sumber_pendanaan');
        $usaha->hambatan_usaha = $request->input('hambatan_usaha');

        try {
            $pemilik->save();
            $pemilik->usaha()->save($usaha);
            return redirect('/registrasi')->with('sukses', 'Data UMKM berhasil ditambah');
        } catch (Exception $e) {
            return redirect('/registrasi')->with('gagal', $e->getMessage());
        }
    }

    public function getDataPemilik()
    {
        $data_usaha = DB::table('jobs')
            ->join('business_types', 'jobs.jenis_usaha_id', '=', 'business_types.id')
            ->select('business_types.jenis_usaha as jenis_usaha', DB::raw('YEAR(jobs.created_at) as Tahun'), DB::raw('COUNT(*) as Pendaftar'))
            ->groupBy('business_types.jenis_usaha', DB::raw('YEAR(jobs.created_at)'))
            ->get();

        return response()->json([
            'data_usaha' => $data_usaha,
        ]);
    }

    public function getDataAnalytic()
    {
        $jk_pria = DB::table('owners')
            ->where('jenis_kelamin', 'L')
            ->count();

        $jk_wanita = DB::table('owners')
            ->where('jenis_kelamin', 'P')
            ->count();

        $dana_pribadi = DB::table('jobs')
            ->where('sumber_pendanaan', 'Dana pribadi')
            ->count();

        $dana_bank = DB::table('jobs')
            ->where('sumber_pendanaan', 'Dana bank')
            ->count();

        $usaha_tertinggi = DB::table('jobs')
            ->join('business_types', 'jobs.jenis_usaha_id', '=', 'business_types.id')
            ->select('business_types.jenis_usaha as jenis_usaha', 'jobs.jenis_usaha_id', DB::raw('COUNT(*) as total'))
            ->groupBy('jobs.jenis_usaha_id', 'business_types.jenis_usaha')
            ->orderByDesc('total')
            ->limit(1)
            ->value('jenis_usaha');

        return [
            'jk_pria' => $jk_pria,
            'jk_wanita' => $jk_wanita,
            'dana_pribadi' => $dana_pribadi,
            'dana_bank' => $dana_bank,
            'usaha_tertinggi' => $usaha_tertinggi
        ];
    }

    public function getCombinedData()
    {
        // Data dari getDataPemilik
        $data_usaha = DB::table('jobs')
            ->join('business_types', 'jobs.jenis_usaha_id', '=', 'business_types.id')
            ->select('business_types.jenis_usaha as jenis_usaha', DB::raw('YEAR(jobs.created_at) as Tahun'), DB::raw('COUNT(*) as Pendaftar'))
            ->groupBy('business_types.jenis_usaha', DB::raw('YEAR(jobs.created_at)'))
            ->get();

        // Data dari getDataAnalytic
        $jk_pria = DB::table('owners')
            ->where('jenis_kelamin', 'L')
            ->count();

        $jk_wanita = DB::table('owners')
            ->where('jenis_kelamin', 'P')
            ->count();

        $dana_pribadi = DB::table('jobs')
            ->where('sumber_pendanaan', 'Dana pribadi')
            ->count();

        $dana_bank = DB::table('jobs')
            ->where('sumber_pendanaan', 'Dana bank')
            ->count();

        $usaha_tertinggi = DB::table('jobs')
            ->join('business_types', 'jobs.jenis_usaha_id', '=', 'business_types.id')
            ->select('business_types.jenis_usaha as jenis_usaha', 'jobs.jenis_usaha_id', DB::raw('COUNT(*) as total'))
            ->groupBy('jobs.jenis_usaha_id', 'business_types.jenis_usaha')
            ->orderByDesc('total')
            ->limit(1)
            ->value('jenis_usaha');

        return response()->json([
            'data_usaha' => $data_usaha,
            'data_analytic' => [
                'jk_pria' => $jk_pria,
                'jk_wanita' => $jk_wanita,
                'dana_pribadi' => $dana_pribadi,
                'dana_bank' => $dana_bank,
                'usaha_tertinggi' => $usaha_tertinggi
            ]
        ]);
    }
}