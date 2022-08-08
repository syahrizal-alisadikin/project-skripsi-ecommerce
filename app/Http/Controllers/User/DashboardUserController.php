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
        if(request()->ajax())
        {
            $query = Transaction::where('user_id',Auth::user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
            ->make(true); 
        }
        return view('pages.user.transactions');
    }

    public function setting()
    {
        $provinces = Province::all();
        return view('pages.user.setting',compact('provinces'));
    }
}
