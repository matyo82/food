@extends('layouts.backend')

@section('title', 'Staff Crate')
@section('contend')
    <div class="card">
        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h4>{{ $page_title }}</h4>
            </div>
            <div class="card-body">

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">responsibility</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="responsibility">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">experience</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="experience">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">phone</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">email</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">biography</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea name="biography" class="summernote-simple"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                    <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
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
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
