@extends('layouts.backend')

@section('title', $page_title)
@section('contend')
    <div class="card">
        <form action="{{ route('admin.general.store', $general ? 'update':'create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>{{ $page_title }}</h4>
            </div>
            <div class="card-body">

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">company name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="company_name"
                               value="{{ $general ? $general->company_name:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">story title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="story_title"
                               value="{{ $general ? $general->story_title:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">address</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="address"
                               value="{{ $general ? $general->address:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">primary phone</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="primary_phone"
                               value="{{ $general ? $general->primary_phone:'' }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">secondary phone</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="secondary_phone"
                               value="{{ $general ? $general->secondary_phone:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">email</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="email"
                               value="{{ $general ? $general->email:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">facebook</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="facebook"
                               value="{{ $general ? $general->facebook:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">twitter</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="twitter"
                               value="{{ $general ? $general->twitter:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">instagram</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="instagram"
                               value="{{ $general ? $general->instagram:'' }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">delivery fee</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="delivery_fee"
                               value="{{ $general ? $general->delivery_fee:'' }}">
                    </div>
                </div>


                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">story_description</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea name="story_description"
                                  class="summernote-simple">{{ $general ? $general->story_description:'' }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">why choose us</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea name="why_choose_us"
                                  class="summernote-simple">{{ $general ? $general->why_choose_us:'' }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">logo</label>
                    <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview"
                             style="background-image: url({{ asset($general ? $general->logo:'') }}); background-size: cover; background-position: center;">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="logo" id="image-upload"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endsection
