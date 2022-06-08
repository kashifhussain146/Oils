<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-header">
                        <h3 class="card-title">{{$projects_unique_id}} Section</h3>
                </div>

                <div class="card-body banner-main-div">

                    <div class="row">
                        <div class="col-md-12 mb-3">

                            <button type="button" class="btn btn-primary float-right " data-toggle="modal"  data-target="#modal-{{$projects_unique_id}}">
                                <i class="fa fa-plus"></i> Add {{$projects_unique_id}}
                            </button>

                        </div>
                    </div>

                    <table class="table table-bordered">
                        <tr>
                            <th>S.no</th>
                            <th>Title</th>
                            {{-- <th>Short Description</th> --}}
                            <th>Image</th>
                            <th >Action</th>
                        </tr>

                        @foreach ($projects as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                {{-- <td>{!!$item->short_desc!!}</td> --}}
                                <td>  <img style="height: 100px;width:100px;" src="{{ (File::exists(public_path($item->image)))?asset($item->image):'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg'}}" alt="" ></td>
                                <td>

                                    <button type="button" class="btn btn-primary btn-sm " data-toggle="modal"  data-target="#modal-edit-{{$projects_unique_id}}{{$item->id}}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>

                                </td>
                            </tr>



                            <div class="modal fade" id="modal-edit-{{$projects_unique_id}}{{$item->id}}">

                                <div class="modal-dialog modal-lg modal-dialog-scrollable">

                                    <form data-behaviour="0" enctype="multipart/form-data" action="{{route('save.admin.projects-pages',$item->id)}}" id="Edit{{$projects_unique_id}}{{$item->id}}">
                                        @csrf
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <h4 class="modal-title">Add {{$projects_unique_id}}</h4>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true">&times;</span>

                                                </button>

                                            </div>


                                            <div class="modal-body">

                                                    <div class="card-body banner-main-div">

                                                        <div class=" row">

                                                            <div class="form-group col-md-12">

                                                                <label for="exampleInputEmail1">Title</label>

                                                                <input type="text" class="form-control" value="{{$item->name}}" id="name" name="name"  placeholder="Enter Title" />

                                                            </div>

                                                            <div class="form-group col-md-10">

                                                                <label for="exampleInputFile">Media</label>

                                                                <div class="input-group">

                                                                    <div class="custom-file">

                                                                        <input type="file" name="image" id="image" class="custom-file-input" >

                                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="form-group col-md-2">
                                                                <img style="height: 100px;width:100px;" src="{{ (File::exists(public_path($item->image)))?asset($item->image):'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg'}}" alt="" >
                                                            </div>



                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputEmail1">Short Description</label>
                                                                <textarea class="form-control" name="short_desc" id="short_desc" >{{$item->short_desc}}</textarea>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputEmail1">Large Description</label>
                                                                <textarea class="form-control" name="big_desc" id="big_desc" >{{$item->big_desc}}</textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                            </div>


                                            <div class="modal-footer justify-content-between">

                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                <button type="submit" data-url="" data-loading-text="Saving...." id="submitButton{{$item->id}}" data-rest-text="Save" class="btn btn-primary">Save</button>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>




                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-{{$projects_unique_id}}">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <form data-behaviour="0"  enctype="multipart/form-data"  action="{{$projects_store_url}}" id="Save{{$projects_unique_id}}">
            @csrf
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title">Add {{$projects_unique_id}}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>


                <div class="modal-body">

                        <div class="card-body banner-main-div">

                            <div class=" row">

                                <div class="form-group col-md-12">

                                    <label for="exampleInputEmail1">Title</label>

                                    <input type="text" class="form-control" id="name" name="name" id="exampleInputEmail1" placeholder="Enter Title" />

                                </div>

                                <div class="form-group col-md-12">

                                    <label for="exampleInputFile">Media</label>

                                    <div class="input-group">

                                        <div class="custom-file">

                                            <input type="file" name="image" id="image" class="custom-file-input" id="exampleInputFile">

                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                        </div>

                                    </div>

                                </div>





                                <div class="form-group col-md-12">
                                    <label for="short_desc">Short Description</label>
                                    <textarea class="form-control" name="short_desc" id="short_desc"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="big_desc">Large Description</label>
                                    <textarea class="form-control" name="big_desc" id="big_desc"></textarea>
                                </div>

                                

                            </div>

                        </div>

                </div>


                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" data-url="" data-loading-text="Saving...." id="submitButton" data-rest-text="Save" class="btn btn-primary">Save</button>

                </div>

            </div>

        </form>

    </div>

</div>

