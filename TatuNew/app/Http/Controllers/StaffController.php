<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Log;

class StaffController extends Controller
{
    public function index(){
        $logs = Log::all();
        return view('staff', compact('logs'));
    }
    public function tambah(){
        return view('tambah');
    }
    public function store(Request $request)
    {
        Log::create([
            'name' => $request->name,
            'log_date' => $request->log_date,
            'description' => $request->description,
            'status' => $request->status,
            'note' => $request->note,
        ]);
        return redirect()->action([StaffController::class, 'index'])->with('success', 'Log berhasil ditambahkan!');
}
public function delete(Request $request, $id){
        $data = Log::find($id);
        if ($data) {
            $data->delete();
        } 
        return redirect()->action([StaffController::class, 'index'])->with('success', 'Log berhasil dihapus!');
    }
}
