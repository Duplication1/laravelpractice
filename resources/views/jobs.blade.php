<x-layout>
    <x-slot:heading>jobs</x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
        <li><a href="/jobs/{{$job['id']}}"> {{ $job['title'] }} earns {{ $job['salary']}} per year </a></li>
    @endforeach
    </ul>
</x-layout>