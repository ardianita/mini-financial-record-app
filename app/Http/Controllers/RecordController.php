<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $record = Record::all();
        $total_pemasukan = Record::query()->where('type', 'income')->sum('amount');
        $total_pengeluaran = Record::query()->where('type', 'expense')->sum('amount');

        return view('record', [
            'income' => $total_pemasukan,
            'expense' => $total_pengeluaran,
            'record' => $record,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => ['required'],
            'category' => ['required'],
            'amount' => ['required'],
            'date' => ['required'],
        ]);
        Record::create($data);
        return redirect()->route('record.store');
    }
}
