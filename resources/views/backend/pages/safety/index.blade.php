@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Safety Section
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Safety Page</h5>
        </div>


        <div class="card-body">
            @if ( !empty( $safety ) )
               <form method="POST" action="{{ route('admin.safety.update', $safety->id ) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
               <form method="POST" action="{{ route('admin.safety.store') }}" enctype="multipart/form-data">
                @csrf
            @endif

                <div class="col mb-3">
                    <label for="youtube_url" class="form-label">Youtube url</label>
                    <textarea id="youtube_url" class="form-control" name="youtube_url" placeholder="Write Here....." required>@if( !empty( $safety ) ){{ $safety->youtube_url }}@endif</textarea>
                </div>

                @if ( !empty( $safety ) )
                    <button type="submit" class="btn btn-primary">Update</button>
                @else
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                @endif
            </form>
        </div>
    </div>
 </div>

@endsection

