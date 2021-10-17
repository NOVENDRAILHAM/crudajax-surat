<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;


class SuratController extends Controller
{
    public function index($id)
    {
        $data = Biodata::findOrFail($id);
        return view('suratijin')->with([
            'data' => $data
        ]);

    }
}
