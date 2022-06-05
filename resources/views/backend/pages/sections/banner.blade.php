<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-header">
                        <h3 class="card-title">{{$title}}</h3>
                </div>

                <div class="card-body banner-main-div">

                    <div class="row">
                        <div class="col-md-12 mb-3">

                            <button type="button" class="btn btn-primary float-right " data-toggle="modal"  data-target="#modal-default">
                                <i class="fa fa-plus"></i> Add Banner
                            </button>

                        </div>
                    </div>

                    <table class="table table-bordered">
                        <tr>
                            <th>S.no</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th >Action</th>
                        </tr>

                        @foreach ($banner as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>  <img style="height: 100px;width:100px;" src="{{ (File::exists(public_path($item->banner)))?asset($item->banner):'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg'}}" alt="" ></td>
                                <td>

                                    <button type="button" class="btn btn-primary btn-sm " data-toggle="modal"  data-target="#modal-edit{{$item->id}}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>

                                </td>
                            </tr>



                            <div class="modal fade" id="modal-edit{{$item->id}}">

                                <div class="modal-dialog modal-lg">

                                    <form data-behaviour="0" enctype="multipart/form-data" action="{{route('save.admin.home-pages',$item->id)}}" id="EditBanner{{$item->id}}">
                                        @csrf
                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <h4 class="modal-title">Add Banner</h4>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true">&times;</span>

                                                </button>

                                            </div>


                                            <div class="modal-body">

                                                    <div class="card-body banner-main-div">

                                                        <div class=" row">

                                                            <div class="form-group col-md-12">

                                                                <label for="exampleInputEmail1">Title</label>

                                                                <input type="text" class="form-control" value="{{$item->title}}" id="title" name="title" id="exampleInputEmail1" placeholder="Enter Title" />

                                                            </div>

                                                            <div class="form-group col-md-10">

                                                                <label for="exampleInputFile">Media</label>

                                                                <div class="input-group">

                                                                    <div class="custom-file">

                                                                        <input type="file" name="banner" id="banner" class="custom-file-input" id="exampleInputFile">

                                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="form-group col-md-2">
                                                                <img style="height: 100px;width:100px;" src="{{ (File::exists(public_path($item->banner)))?asset($item->banner):'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg'}}" alt="" >
                                                            </div>



                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputEmail1">Description</label>
                                                                <textarea class="form-control" name="description" id="description" >{{$item->description}}</textarea>

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


<div class="modal fade" id="modal-default">

    <div class="modal-dialog modal-lg">

        <form data-behaviour="0"  enctype="multipart/form-data"  action="{{$store_url}}" id="SaveBanner">
            @csrf
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title">Add Banner</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>


                <div class="modal-body">

                        <div class="card-body banner-main-div">

                            <div class=" row">

                                <div class="form-group col-md-12">

                                    <label for="exampleInputEmail1">Title</label>

                                    <input type="text" class="form-control" id="title" name="title" id="exampleInputEmail1" placeholder="Enter Title" />

                                </div>

                                <div class="form-group col-md-12">

                                    <label for="exampleInputFile">Media</label>

                                    <div class="input-group">

                                        <div class="custom-file">

                                            <input type="file" name="banner" id="banner" class="custom-file-input" id="exampleInputFile">

                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group col-md-12">

                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" name="description" id="description" ></textarea>

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

