@extends('layouts.app', ['titlePage' => 'Dashboard Setting User'])

@section('content-page')
<div class="container-fluid" style="padding: 100px 50px">
    <div class="row">
        <div class="col-md-3">
            @include('pages.includes.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3>Setting {{ Auth::user()->name }}</h3>
                    <form action="{{ route('user.setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ old('name',Auth::user()->name) }}" placeholder="Masukkan Name"
                                            class="form-control @error('name') is-invalid @enderror">
            
                                        @error('name')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ old('email',Auth::user()->email) }}" placeholder="Masukkan Email"
                                            class="form-control @error('email') is-invalid @enderror">
            
                                        @error('email')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                   
                                    <div class="form-group mb-2">
                                        <label>Phone</label>
                                        <input type="number" name="phone" value="{{ old('phone',Auth::user()->phone) }}" placeholder="Masukkan Phone"
                                            class="form-control @error('phone') is-invalid @enderror">
            
                                        @error('phone')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Password</label>
                                        <input type="password" name="password" 
                                            class="form-control @error('password') is-invalid @enderror">
                                        <span>*note : Kosongkan Jika tidak di ganti</span>
                                        @error('password')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation"" 
                                            class="form-control ">
            
                                        
                                    </div>
                                   
                               
        
                                </div>
                                <div class="col-md-6" >
                                    <div class="form-group mb-2">
                                        <label>Address</label>
                                        <textarea name="address" id="address" class="form-control address" placeholder="Masukan address" cols="30" rows="5">
                                            {{ old('address',Auth::user()->address) }}
                                        </textarea>
            
                                        @error('address')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Province</label>
                                        <select name="province_id" id="select" class="form-control @error('province_id') is-invalid @enderror">
                                            <option value="">Pilih Provinsi</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}" {{ old('province_id',Auth::user()->province_id) == $province->id ? 'selected' : '' }}>
                                                    {{ $province->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('province_id')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                   
                                    <div class="form-group mb-2">
                                        <label>Kota</label>
                                        <select name="regencies_id" class="form-control" id="regencies_id" required>
                                            <option value="">Pilih Kota</option>
                                        </select>
            
                                        @error('regencies_id')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                   
                               
        
                                </div>
                                
                            </div>
                            <div class="row justify-content-center mt-2">
                                <div class="col-md-3">
                                    <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                        SIMPAN</button>
                                    <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    var editor_config = {
        selector: "textarea.address",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
    };

    tinymce.init(editor_config);
</script>

<script>
    $(document).ready(function(){

        var province_id = '{{ old('province_id',Auth::user()->province_id) }}';
        var regencies_id = '{{ old('regencies_id',Auth::user()->regencies_id) }}';
       
        if(province_id){
            $.ajax({
                url : "{{ url('/') }}/user/regencies/"+province_id,
                type : "GET",
                dataType : "JSON",
                success : function(data){
                    $('#regencies_id').empty();
                    $('#regencies_id').append('<option value="">Pilih Kota</option>');

                    $.each(data, function(key, value){
                        $('#regencies_id').append(`<option value="${value.id}" ${value.id == regencies_id ? "selected" : ""} >${value.name}</option>`);
                    });
                }
            });
        }

        $('#select').change(function(){
            var province_id = $(this).val();
            $.ajax({
                url : "{{ url('/') }}/user/regencies/"+province_id,
                type : "GET",
                dataType : "JSON",
                success : function(data){
                    $('#regencies_id').empty();
                    $('#regencies_id').append('<option value="">Pilih Kota</option>');

                    $.each(data, function(key, value){
                        $('#regencies_id').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        });
    });
</script>

@endpush