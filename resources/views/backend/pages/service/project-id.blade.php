@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Service Section id
@endpush

@push('add-css')
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Projects Table {{ $id }}</h5>
        </div>


        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered" id="serviceTables">
              <thead>
                <tr>
                  <th>#SL.</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

              </tbody>

            </table>
          </div>
        </div>
    </div>
 </div>

 @endsection



 @push('custom-script')

 @endpush
