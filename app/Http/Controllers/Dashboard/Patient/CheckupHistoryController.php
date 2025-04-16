<?php

namespace App\Http\Controllers\Dashboard\Patient;

use Illuminate\Http\Request;
use App\Models\Checkup\Periksa;
use App\Http\Controllers\Controller;
use App\Models\Checkup\DetailPeriksa;
use Illuminate\Support\Facades\Auth;

class CheckupHistoryController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->getAuthIdentifier();
        $details = DetailPeriksa::with(['periksa' => function ($query) use ($userId) {
            $query->where('id_pasien', $userId)->with('dokter');
        }, 'obat'])->get();
        // dd($details);
        return view('pages.dashboard.patient.riwayat-dashboard', compact('details'));
    }
}
