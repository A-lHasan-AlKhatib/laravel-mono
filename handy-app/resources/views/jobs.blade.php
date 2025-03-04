<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <h1>Hello from the Jobs page</h1>
    <h2>Jobs list</h2>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline"
                >{{$job['title']}} pays {{$job['salary']}} anualy.</a>
            </li>
        @endforeach
    </ul>
</x-layout>
