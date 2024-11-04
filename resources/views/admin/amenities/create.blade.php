@if($type == 'car' || $type == 'real-estate' || $type == 'hotel' || $type == 'restaurant')
<!-- FontAwesome Icon Picker CSS -->
<link rel="stylesheet" href="{{asset('public/assets/backend/iconpicker/fontawesome-iconpicker.min.css')}}">

<style>
    .iconpicker-popover {
        visibility: visible;
        opacity: 1 !important;
    }
</style>

<form action="{{route('admin.amenities.create',['type'=>$type])}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" class="d-none" name="page" value="{{$page}}">
    <input type="text" class="d-none" name="listing_id" value="{{$listing_id}}">
    <div class="mb-3">
        <label for="name" class="form-label ol-form-label"> {{get_phrase('Amenities Name')}} </label>
        <input type="text" class="form-control ol-form-control" name="name" id="name" placeholder="{{get_phrase('Enter name')}}" required>
    </div>
    <div class="mb-3">
        <label for="icon" class="form-label ol-form-label"> {{get_phrase('Amenities icon')}} </label>
        <input class="form-control ol-form-control icp icp-auto" name="icon" placeholder="{{get_phrase('Pick an Icon')}}" type="text" required>
    </div>
    <input type="hidden" value="{{$item}}" name="item">   
    <div>
        <button type="submit" class="btn btn-primary"> {{get_phrase('Create')}} </button>
    </div>
</form>

<script src="{{asset('public/assets/backend/iconpicker/fontawesome-iconpicker.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.icp-auto').iconpicker();
    });
</script>
@elseif($type == 'beauty')
    @if ($item == 'service')
        <form action="{{route('admin.amenities.create',['type'=>$type])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="d-none" name="page" value="{{$page}}">
            <input type="text" class="d-none" name="listing_id" value="{{$listing_id}}">
            <input type="hidden" value="{{$item}}" name="item"> 
            <div class="mb-3">
                <label for="name" class="form-label ol-form-label"> {{get_phrase('Service Title')}} </label>
                <input type="text" class="form-control ol-form-control" name="name" id="name" placeholder="{{get_phrase('Enter service title')}}" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label ol-form-label"> {{get_phrase('Service Time')}} </label>
                <input type="text" class="form-control ol-form-control" name="time" id="time" placeholder="{{get_phrase('Enter service time')}}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label ol-form-label"> {{get_phrase('Service Price')}} </label>
                <input type="number" class="form-control ol-form-control" name="price" id="price" placeholder="{{get_phrase('Enter service price')}}" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary"> {{get_phrase('Create')}} </button>
            </div>
        </form>
    @else    
    <form action="{{route('admin.amenities.create',['type'=>$type])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label ol-form-label"> {{get_phrase('Name')}} </label>
            <input type="text" class="form-control ol-form-control" name="name" id="name" placeholder="{{get_phrase('Enter team member name')}}" required>
        </div>
        <div class="mb-3">
            <label for="designation" class="form-label ol-form-label"> {{get_phrase('Designation')}} </label>
            <input class="form-control ol-form-control" name="designation" id="designation" placeholder="{{get_phrase('Enter team member designation')}}" type="text" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label ol-form-label"> {{get_phrase('Image')}} </label>
            <input class="form-control ol-form-control" name="image" id="image" type="file" required>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label ol-form-label"> {{get_phrase('Rating')}} </label>
            <select name="rating" id="rating" class="form-control ol-select2 ol-form-control">
                <option value=""> {{get_phrase('Select reating')}} </option>
                <option value="1.0"> {{get_phrase('1.0')}} </option>
                <option value="2.0"> {{get_phrase('2.0')}} </option>
                <option value="3.0"> {{get_phrase('3.0')}} </option>
                <option value="4.0"> {{get_phrase('4.0')}} </option>
                <option value="5.0"> {{get_phrase('5.0')}} </option>
            </select>
        </div>
        <input type="text" class="d-none" name="page" value="{{$page}}">
        <input type="text" class="d-none" name="listing_id" value="{{$listing_id}}">
        <input type="hidden" value="{{$item}}" name="item">   
        <div>
            <button type="submit" class="btn btn-primary"> {{get_phrase('Create')}} </button>
        </div>
    </form>
    @endif
@elseif ($type == 'real-estate')

@endif

