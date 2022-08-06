<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query()->where('roles', 'ADMIN')->latest();
            return DataTables()->of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    $edit = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                    $delete = '<a href="javascript:void(0)" onClick="Delete(this.id)" id="' . $data->email . '" class="delete btn btn-danger btn-sm">Delete </a>';

                    return $edit . ' ' . $delete;
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->editColumn('phone', function ($row) {
                    return $row->phone ?? '-';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.admin.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('email', $id)->first();
        $user->delete();
        return response()->json(['status' => 'success']);
    }
}
