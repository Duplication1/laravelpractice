<x-layout>
    <x-slot:heading>jobs</x-slot:heading>
    <H2>{{ $job['title'] }}</H2>
    <H2>{{ $job['salary'] }}</H2>

    
        <a href="/jobs/{{$job->id}}/edit" class="bg-blue-500">Edit</a>
    
</x-layout>