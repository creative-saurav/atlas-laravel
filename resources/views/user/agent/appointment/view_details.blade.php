@if ($type == 'phone')
    <span>{{get_phrase('Phone Number')}}:</span>
    <a href="tel:{{$details->phone}}" class="text-center">{{$details->phone}}</a>
@elseif ($type == 'email')
    <span>{{get_phrase('Email Address')}}:</span>
    <a href="mailto:{{$details->email}}" class="text-center">{{$details->email}}</a>
@elseif($type == 'zoom')

        @if (request()->is('customer/appointment/details*') == 0)
            <form action="{{route('agent.update.zoom.link',['id'=>$appointment->id])}}" method="post" enctype="multipart/form-data">
                @csrf
        @endif
        <div class="mb-2">
            <label for="link" class="form-label cap-form-label"> {{get_phrase('Metting Link')}} *</label>
            <input type="text" name="link" id="link" {{request()->is('customer/appointment/details*') == 1 ?'disabled':''}} class="form-control cap-form-control" value="{{$appointment->zoom_link}}" placeholder="{{get_phrase('Enter metting link')}}" >
        </div>
        @if (request()->is('customer/appointment/details*') == 0)
            <div class="mb-2">
                <button type="submit" class="btn cap-btn-primary"> {{get_phrase('Update')}} </button>
            </div>
            </form>
        @endif

@endif