<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
class KabidController extends Controller
{
    public function index()
    {
        $logs = Log::all();
        return view('kabid', compact('logs'));
    }
    public function edit($id)
{
    $log = Log::findOrFail($id);
    return view('update', compact('log'));
}
     public function update(Request $request, $id){
        Log::whereId($id)->update([
            'name' => $request->name,
            'log_date' => $request->log_date,
            'description' => $request->description,
            'status' => $request->status,
            'note' => $request->note,
        ]);
        return redirect()->action([KabidController::class, 'index'])->with('success', 'Status berhasil diperbarui!');
    }
}
