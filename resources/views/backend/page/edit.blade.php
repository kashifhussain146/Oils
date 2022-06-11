<div class="card-body">
    <form id="PageUpdate" action="{{route('pages.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$page->id}}">
        {{-- <div class="form-group">
            <select class="form-control select2" name="page_group_id" required>
                <option>Select Group)</option>
                @foreach($pageGroups as $item)
                    <option value="{{$item->id}}" {{$page->page_group_id == $item->id ? 'selected':null}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="form-group">
            <label>Page Title <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="title" value="{{$page->title}}" required>
        </div>

        <div class="form-group">
            <label for="">Is menu</label>
            <select name="is_menu" class="form-control" id="is_menu">
                <option value="">Select</option>
                <option {{($page->is_menu==1)?'selected':''}}  value="1">Yes</option>
                <option {{($page->is_menu==0)?'selected':''}}  value="0">No</option>
            </select>
        </div>

        <div class="float-right">
            <button class="btn btn-primary float-right" type="submit">Save</button>
        </div>

    </form>
</div>

