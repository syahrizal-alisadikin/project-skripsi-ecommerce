@extends('layouts.admin', ['title' => 'Dashboard Admin Category Create'])

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Category</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>NAMA CATEGORY</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Category"
                                    class="form-control @error('name') is-invalid @enderror">
    
                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="photo" 
                                    class="form-control @error('photo') is-invalid @enderror">
    
                                @error('photo')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                          
    
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
                        </div>
                     </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
</div>


@endsection

