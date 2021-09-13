<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\EventChange;

class DashboardController extends Controller
{
    public function index()
    {
        $parcels = Parcel::all();
        return view('admin.index',compact('parcels'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginUser(Request $request)
    {
        $this->validator($request);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        session()->flash('error','Invalid credentials');
        return back()->withInput($request->only('email'));
    }

    public function validator(Request $request)
    {
        $rules = [
            'email'         => 'required|email',
            'password'      => 'required|min:5',
        ];

        return $this->validate($request, $rules);
    }

    public function createParcel()
    {
        return view('admin.create');
    }

    public function storeParcel(Request $request)
    {
        $parcel = Parcel::create($request->all());

        $change = new EventChange;
        $change->location = $request->location;
        $change->event    = $request->event;
        $change->parcel_id = $parcel->id;
        $change->save();

        return redirect()->route('dashboard');
    }

    public function editParcel($id)
    {
        $parcel = Parcel::find($id);
        if (!$parcel) {
            session()->flash('error', 'Parcel not found');
            return redirect()->back();
        }
        return view('admin.edit', compact('parcel'));
    }

    public function updateParcel(Request $request, $id)
    {
        $parcel = Parcel::find($id);
        if ($parcel->location != $request->location || $parcel->event != $request->event) {
            $change = new EventChange;
            $change->location = $request->location;
            $change->event    = $request->event;
            $change->parcel_id = $parcel->id;
            $change->save();
        }
        $parcel->update($request->all());
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
