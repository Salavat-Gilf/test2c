<?php

namespace App\Http\Controllers;

use App\Models\Records;




class RecordController extends Controller
{
    public function index()
    {
        return view('/records');
    }

    public function show(Records $records)
{
    Records::all();
    return view('records', ['records' => $records]);
}


}
