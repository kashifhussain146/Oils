@extends('backend.layouts.header')
@section('title') Update Page Content  @endsection
@section('content')

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">Edit Page Content</h2>
            </div>
            <div class="float-right">
                <div class="row">
                    <div class="col">
                        <a href="{{route('pages.content.index',$content->page_id)}}"
                           class="btn btn-primary">
                            <i class="la la-plus"></i>
                            Content List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="card-body">
                <form id="ContentEdit" action="{{route('pages.content.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input name="id" type="hidden" value="{{$content->id}}">
                    <input name="page_id" type="hidden" value="{{$content->page_id}}">
                    <div class="form-group">
                        <label>Content Title <span class="text-danger">*</span></label>
                        <input class="form-control @error('title') is-invalid @enderror" type="text"
                               value="{{ $content->title }}" name="title" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="val-suggestions">Short Description</label>
                        <textarea  class="form-control textarea " name="shor_description" rows="5" aria-required="true"  id="shor_description">{{ $content->meta_desc }}</textarea>
                        @error('shor_description') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                    </div>


                    <div class="form-group">
                        <label class="col-form-label" for="val-suggestions">
                            Content Description</label>
                        <textarea  class="form-control textarea @error('body') is-invalid @enderror"
                                  name="body" rows="5" aria-required="true">{{ $content->body }}</textarea>
                        @error('body') <span class="invalid-feedback"
                                             role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                    </div>


                    <div class="form-group col-md-10">

                        <label for="exampleInputFile">Media</label>

                        <div class="input-group">

                            <div class="custom-file">

                                <input type="file" name="file" id="file" class="custom-file-input" id="exampleInputFile">

                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                            </div>

                        </div>

                    </div>

                    <div class="form-group col-md-2">
                        <img style="height: 100px;width:100px;" src="{{ (File::exists(public_path($content->file)))?asset($content->file):'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg'}}" alt="" >
                    </div>

                    <div class="float-right">
                        <button class="btn btn-primary float-right" type="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection


