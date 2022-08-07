<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('pages.user.dashboard');
    }

    public function transactions()
    {
        return view('pages.user.transactions');
    }

    public function setting()
    {
        return view('pages.user.setting');
    }
}
