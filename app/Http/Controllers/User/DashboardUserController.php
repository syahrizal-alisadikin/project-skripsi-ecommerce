<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Transaction;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('pages.user.dashboard');
    }

    public function transactions()
    {
        if (request()->ajax()) {
            $query = Transaction::where('user_id', Auth::user()->id);
            return DataTables::of($query)
                ->addIndexColumn()
                ->make(true);
        }
        return view('pages.user.transactions');
    }

    public function setting()
    {
        $provinces = Province::all();
        return view('pages.user.setting', compact('provinces'));
    }

    public function updateUser(Request $request)
    {
        $user = Auth::user();

        // validasi
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'province_id' => 'required|integer',
            'regencies_id' => 'required|integer',
        ]);

        // jika password kosong
        if (isset($request->password)) {
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed',
            ]);
        } else {
            $user->update([
                'name'      => $request->input('name'),
                'email'     => $request->input('email'),
                'phone'     => $request->input('phone'),
                'address'   => $request->input('address'),
                'province_id' => $request->input('province_id'),
                'regencies_id' => $request->input('regencies_id'),
            ]);
        }

        return "lolos validasi";
        $user->update($request->all());
        return redirect()->route('user.setting.index')->with('success', 'Data berhasil diupdate');
    }
}
