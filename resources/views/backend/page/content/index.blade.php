@extends('backend.layouts.header')
@section('title') Page Content List @endsection
@section('content')

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">Content List</h2>
            </div>
            <div class="float-right">
                <div class="row">
                    <div class="col">
                        <a href="{{route('pages.content.create',$id)}}"
                           class="btn btn-primary">
                            <i class="la la-plus"></i>
                            Create Content
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped bg-dark table-bordered table-hover">
                <thead>
                <tr>
                    <th>S/L
                    <th>Title
                    <th>Total Content
                    <th>Active
                    <th>Action
                </tr>
                </thead>
                <tbody>
                @forelse($content as  $item)
                    <tr>
                        <td>{{ ($loop->index+1) }}</td>
                        <td>{{$item->title}}</td>
                        <td>
                            {!!$item->body!!}
                        </td>
                        <td>
                            <div class="form-group">
                                <div
                                    class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input data-id="{{$item->id}}"
                                           {{$item->active == true ? 'checked' : null}}  data-url="{{route('pages.content.active')}}"
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
                                    <li><a href="{{route('pages.content.edit',$item->id)}}" class="nav-link text-black">Edit</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#!" class="nav-link text-black"
                                           onclick="confirm_modal('{{ route('pages.content.destroy', $item->id) }}')">Delete</a>
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

