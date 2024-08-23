<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UMKMController;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $umkmController;

    public function __construct(UMKMController $umkmController)
    {
        $this->umkmController = $umkmController;
        $this->middleware('role:admin,pimpinan');
    }

    public function index()
    {
        $dataAnalytic = $this->umkmController->getDataAnalytic();

        $combinedData = $this->umkmController->getCombinedData();

        $genderData = $this->umkmController->getGenderData();

        $businessTypeData = $this->umkmController->getBusinessTypeData();

        $fundingSourceData = $this->umkmController->getFundingSourceData();

        return view('admin.index')->with([
            'user' => Auth::user(),
            'count' => Pemilik::count(),
            'dataAnalytic' => $dataAnalytic,
            'combinedData' => $combinedData,
            'genderData' => $genderData,
            'businessTypeData' => $businessTypeData,
            'fundingSourceData' => $fundingSourceData,
        ]);
    }
}