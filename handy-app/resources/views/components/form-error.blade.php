@props(['name'])

@error($name)
<p class="text-xs text-red-500 font-semi-bold">{{$message}}</p>
@enderror
