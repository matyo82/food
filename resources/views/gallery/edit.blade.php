@extends('layouts.backend')

@section('title', 'Gallery edit')
@section('contend')
    <div class="card">
        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>{{ $page_title }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">caption</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="caption" value="{{ $gallery->caption }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                    <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview" style="background-image: url({{ asset($gallery->thumbnail) }}); background-size: cover; background-position: center;">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">type</label>
                    <div class="col-sm-12 col-md-7">
                        <select name="type" class="form-control selectric" id="type">
                            <option {{ $gallery->type == 0 ? 'selected':'' }} value="0">Photo</option>
                            <option {{ $gallery->type == 1 ? 'selected':'' }} value="1">Video</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4 {{ $gallery->type == 0 ? 'd-none':'' }}" id="video_link">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video link</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="video_link" value="{{ $gallery->video_link }}">
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $('#type').on('change', function (){
            const val = $(this).val();
            if (val==1) {
                $('#video_link').removeClass('d-none');
            }else{
                $('#video_link').addClass('d-none');
            }
        });
    </script>

    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
