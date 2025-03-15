@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        {{-- pull random image --}}
        <x-employer-logo src="https://picsum.photos/seed/{{rand(0,10000)}}/90/90" alt="place holder" class="rounded-xl"/>
    </div>
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>
    <div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>

    </div>
</x-panel>
