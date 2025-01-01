<x-layout>
    <x-slot:heading>jobs</x-slot:heading>
    <div class="space-y-4">
    @foreach ($jobs as $job)
    <a href="/jobs/{{$job['id']}}" class="hover:underline block px-4 py-6 border border-gray-200">
        <div class="text-blue-500">{{$job->employer->name}}</div>
        <div>
            {{ $job['title'] }} earns {{ $job['salary']}} per year
        </div>
        </a>
    @endforeach
    <div>
        {{ $jobs->links() }}
    </div>
    </div>
</x-layout>