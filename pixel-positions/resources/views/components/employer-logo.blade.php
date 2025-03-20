@props(['employer', 'width' => 90])

@php
    if($employer->logo){
        $logo = asset('storage/'.$employer->logo);
    }else{
        $logo = $employer->logo;
    }
@endphp

<img src="{{asset('storage/'.$employer->logo)}}" alt="place holder" class="rounded-xl" width="{{$width}}">
