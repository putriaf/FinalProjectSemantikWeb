<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;

class SmartphoneController extends Controller
{
    public function index()
    {
        $data = new DataController();
        $dataAll = collect($data->getAllSmartphone());
        $unique = $dataAll->unique('phoneID');
        $unique->values()->all();

        return view('index', compact('unique'));
    }

    public function search(Request $request)
    {
        $data = new DataController();
        $varsearch = $request->search;
        $search = $data->search($varsearch);
        return view('search_result', compact('search', 'varsearch'));
    }
}
