<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function trackerForm()
    {
        return view('tracker');
    }

    public function trackerResult(Request $request)
    {
        // dd($request->code);
        $parcel = Parcel::where('code', $request->code)->first();
        return view('result', compact('parcel'));
    }
}
