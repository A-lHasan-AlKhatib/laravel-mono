<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    <h1>Hello from the Job page</h1>
    <h2>Job details</h2>
    <h2>{{$job['title']}}</h2>
    <p>This job pays {{$job['salary']}} anualy</p>
</x-layout>
