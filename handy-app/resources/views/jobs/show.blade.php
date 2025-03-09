<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    <h1>Hello from the Job page</h1>
    <h2>Job details</h2>
    <h2>{{$job->title}}</h2>
    <p>This job pays {{$job->salary}} anualy</p>

    @can('edit', $job)
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
    @endcan
</x-layout>
