@foreach ($options as $key => $option)
    <option
    @if ($key == $selected)
        selected
    @endif  
    value="{{$option[1]}}">
        {{$option[0]}}
    </option>
@endforeach
