<form action="{{route('admin.store-category',['type'=>$type])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label ol-form-label"> {{get_phrase('Category name')}} </label>
        <input type="text" class="form-control ol-form-control" name="name" id="name" placeholder="{{get_phrase('Enter Category Name')}}" required>
    </div>
    <div class="mb-3">
        <label for="parent" class="form-label ol-form-label"> {{get_phrase('Category parent')}} </label>
        <select name="parent" id="parent" class="ol-select2" data-minimum-results-for-search="Infinity">
            <option value="0"> {{get_phrase('Select Category parent')}} </option>
            @foreach ($parents as $parent)
                <option value="{{$parent->id}}"> {{$parent->name}} </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary"> {{get_phrase('Save')}} </button>
</form>

<script>
    $('.ol-select2').select2({
        dropdownParent: $('#ajax-modal')
    });
</script>