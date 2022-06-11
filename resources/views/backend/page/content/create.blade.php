@extends('backend.layouts.header')
@section('title') Page Content Create @endsection
@section('content')
    <div class="card ">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">Page Content Create</h2>
            </div>
            <div class="float-right">
                <div class="row">
                    <div class="col">
                        <a href="{{route('pages.content.index',$id)}}"
                           class="btn btn-primary">
                            <i class="la la-plus"></i>
                            Content List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="card-body">
                <form id="ContentCreate" action="{{route('pages.content.store',$id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input name="page_id" type="hidden" value="{{$id}}">
                    <div class="form-group">
                        <label>Content Title <span class="text-danger">*</span></label>
                        <input placeholder="Enter Content Title" class="form-control @error('title') is-invalid @enderror" type="text" value="{{ old('title') }}" name="title" id="title">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="val-suggestions">Short Description</label>
                        <textarea  class="form-control textarea @error('shor_description') is-invalid @enderror" name="shor_description" rows="5" aria-required="true"  id="shor_description">{{ old('shor_description') }}</textarea>
                        @error('shor_description') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                    </div>


                    <div class="form-group">
                        <label class="col-form-label" for="val-suggestions">Content Description</label>
                        <textarea  class="form-control textarea @error('body') is-invalid @enderror" name="body" rows="5" aria-required="true"  id="body">{{ old('body') }}</textarea>
                        @error('body') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                    </div>





                    <div class="row">
    
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
                            <img style="height: 100px;width:100px;" src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg" alt="" >
                        </div>

                    </div>



                    <div class="float-right">
                        <button class="btn btn-primary float-right" type="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection


