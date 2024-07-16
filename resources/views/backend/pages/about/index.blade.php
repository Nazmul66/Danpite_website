@extends('backend.layout.master')

@push('meta-title')
        Dashboard | About Section
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>About Page</h5>
        </div>


        <div class="card-body">
            @if ( !empty( $about ) )
               <form method="POST" action="{{ route('admin.about.update', $about->id ) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
               <form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
                @csrf
            @endif

                <div class="col mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Write Here......"
                        @if ( !empty( $about ) )
                        value="{{ $about->title }}"
                        @endif
                        required>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="image">

                        @if ( !empty( $about ) )
                            <img src="{{ asset( $about->image ) }}" alt="" style="width: 150px;">
                        @endif
                    </div>

                    <div class="col mb-3">
                        <label class="form-label" for="url">URL</label>
                        <input type="text" class="form-control"
                            id="url"
                            name="url"
                            placeholder="Write url here...."
                            @if ( !empty( $about ) )
                               value="{{ $about->url }}"
                            @endif
                        >
                    </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="description">Description</label>
                  <textarea id="description" class="form-control" name="description" placeholder="Write Here....." required>@if( !empty( $about ) ){{ $about->description }}@endif</textarea>
                </div>

                @if ( !empty( $about ) )
                    <button type="submit" class="btn btn-primary">Update</button>
                @else
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                @endif
            </form>
        </div>
    </div>
 </div>

@endsection

