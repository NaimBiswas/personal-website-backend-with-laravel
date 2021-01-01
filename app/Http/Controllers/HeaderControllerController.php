<?php

namespace App\Http\Controllers;

use App\Models\HeaderController;
use Illuminate\Http\Request;

class HeaderControllerController extends Controller
{
    public function index()
    {
        return view('backend.header.index');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'header' => 'required|max:40',
            'static_text' => 'required|max:40',
            'dynamic_text' => 'required|max:40',

        ]);
        $header = HeaderController::create([

            'header' => $request->header,
            'static_text' => $request->static_text,
            'dynamic_text' => $request->static_text,
        ]);
        return back()->with('success', 'Info Add Success');
    }
    public function imagesStore(Request $request)
    {
        if ($request->hasFile('images')) {
        }
    }
}
