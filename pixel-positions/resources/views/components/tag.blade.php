@props(['size' => 'base'])

@php
    $classes = "bg-white/10  rounded-xl hover:bg-white/25 transition-colors duration-150 font-bold";
    if($size == 'base'){
        $classes .= ' px-5 py-1 text-s';
    } elseif ($size == 'small'){
        $classes .= ' px-3 py-1 text-xs';
    }

@endphp

<a class="{{$classes}}">{{$slot}}</a>
