@extends('layouts.app', ['titlePage' => 'Dashboard Transaction User'])

@section('content-page')
<div class="container-fluid" style="padding: 100px 50px">
    <div class="row">
        <div class="col-md-3">
            @include('pages.includes.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4> Transactions {{ Auth::user()->name }}</h4>
                </div>

                <div class="card-body">
                  
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table-transactions" style="width: 100%">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAME</th>
                                
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                           
                        </table>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('after-script')
<script>
    // Datatables
    var datatable = $('#table-transactions').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! url()->current() !!}',
                type: 'GET',
            },
         
            columns: [                   
                { "data": "id", "name": "id",
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
                },
                {
                    data: 'name',
                    name: 'name'
                },
                
                {
                    data: 'action',
                    name: 'action'
                },
               
            ],
            columnDefs: [
                {
                    "targets": 0, // your case first column
                    "className": "text-center",
                },
                {
                    "targets": 1, // your case first column
                    "className": "text-center",
                },
                {
                    "targets": 2, // your case first column
                    "className": "text-center",
                },
               
             
               
               
               
           ]
        });
   
</script>
@endpush