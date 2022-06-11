@extends('backend.layouts.header')
@section('title') pages list @endsection
@section('content')
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="float-left">
                        <h2 class="card-title">Page List</h2>
                    </div>
                    <div class="float-right">
                        <div class="row">
                            <div class="col">
                                <a href="#!"
                                   onclick="forModal('{{ route("pages.create") }}', 'Page Create')"
                                   class="btn btn-primary">
                                    <i class="la la-plus"></i>
                                    Create New Page
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped- table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>S/L
                            <th>Title
                            <th>Total Content
                            <th>Is Menu
                            <th>Active
                            <th>Action
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($pages as  $item)
                            <tr>
                                <td>{{ ($loop->index+1) }}</td>
                                <td>{{$item->title}}</td>
                                <td>
                                    {{$item->content->count() ?? 'N/A'}}
                                </td>
                                <td>
                                    {{($item->is_menu==1)?'Yes':'No'}}
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input data-id="{{$item->id}}"
                                                   {{$item->active == true ? 'checked' : null}}  data-url="{{route('pages.active')}}"
                                                   type="checkbox" class="custom-control-input"
                                                   id="customSwitch{{$item->id}}">
                                            <label class="custom-control-label" for="customSwitch{{$item->id}}"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-flat dropdown-toggle btn-sm"
                                                data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu  dropdown-menu-right p-2" role="menu">
                                            <li><a href="{{route('pages.content.index',$item->id)}}" class="nav-link text-black" >Page Content</a></li>
                                            <li><a href="#!" class="nav-link text-black" onclick="forModal('{{ route('pages.edit', $item->id) }}','')">Edit</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#!" class="nav-link text-black"
                                                   onclick="confirm_modal('{{ route('pages.destroy', $item->id) }}')">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="5"><h3 class="text-center">No Data Found</h3></td>
                            </tr>


                        @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
@endsection

