<x-panel class="flex gap-x-6">
    <div>
        {{-- pull random image --}}
        <x-employer-logo src="https://picsum.photos/seed/{{rand(0,10000)}}/90/90" alt="place holder" class="rounded-xl"/>
    </div>
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400">Employer</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">Job Title</h3>
        <p class="text-sm text-gray-400 mt-auto">Job details and salary</p>
    </div>
    <div>
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>

    </div>
</x-panel>
