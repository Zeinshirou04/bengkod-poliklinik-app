<?php

namespace App\Http\Controllers\Dashboard\Doctor;

use Illuminate\Http\Request;
use App\Models\Checkup\Periksa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckupInformationController extends Controller
{
    public function index() {
        $userId = Auth::user()->getAuthIdentifier();
        $periksas = Periksa::where('id_dokter', $userId)->with('pasien')->get();
        return view('pages.dashboard.doctor.periksa-dashboard', compact('periksas'));
    }
}
