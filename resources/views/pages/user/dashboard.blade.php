@extends('layouts.app', ['titlePage' => 'Dashboard User'])

@section('content-page')
<div class="container-fluid" style="padding: 100px 50px">
    <div class="row">
        <div class="col-md-3">
            @include('pages.includes.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3>Selamat Datang {{ Auth::user()->name }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection