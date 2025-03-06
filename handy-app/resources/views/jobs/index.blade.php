<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <h1>Hello from the Jobs page</h1>
    <h2>Jobs list</h2>
    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border-grey-200 rounded-lg">
                <div class="font-bold text-sm text-blue-500">{{$job->employer->name}}</div>
                <strong>{{$job['title']}}</strong> pays {{$job['salary']}} anualy.
            <br>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>
