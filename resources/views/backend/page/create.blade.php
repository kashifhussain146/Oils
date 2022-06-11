<div class="card-body">
    <form data-behaviour="0" id="PageCreate" action="{{route('pages.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- <div class="form-group">
            <label>Select Page Group <span class="text-danger">*</span></label>
            <select class="form-control select2" name="page_group_id" required>
                <option value="">Select Group</option>
                @foreach($pageGroups as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group">
            <label>Page Title <span class="text-danger">*</span></label>
            <input class="form-control" id="title" placeholder="Page Title" type="text"  name="title" required>
        </div>

        <div class="form-group">
            <label for="">Is menu</label>
            <select name="is_menu" class="form-control" id="is_menu">
                <option value="">Select</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="float-right">
            <button class="btn btn-primary float-right" type="submit">Save</button>
        </div>

    </form>
</div>





