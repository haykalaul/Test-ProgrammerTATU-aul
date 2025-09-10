<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PerformanceService;

class UtamaController extends Controller
{
    protected $performanceService;

    public function __construct(PerformanceService $performanceService)
    {
        $this->performanceService = $performanceService;
    }

     public function index()
    {
        return view('utama');
    }
 public function hitungPredikat(Request $request)
{
    $request->validate([
        'hasil_kerja' => 'required|string',
        'perilaku' => 'required|string',
    ]);

    try {
        $predikat = $this->performanceService->predikat_kinerja(
            $request->input('hasil_kerja'),
            $request->input('perilaku')
        );
    } catch (\InvalidArgumentException $e) {
        return back()->withErrors(['msg' => $e->getMessage()])->withInput();
    }

    // Kirim hasil input ke view agar bisa ditampilkan kembali
    $hasil_kerja = $request->input('hasil_kerja');
    $perilaku = $request->input('perilaku');

    return view('utama', compact('predikat', 'hasil_kerja', 'perilaku'));
}
}