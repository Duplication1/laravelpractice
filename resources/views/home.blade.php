<x-layout>
    <x-slot:heading>Home Page</x-slot:heading>
    <H1>Home</H1>
    {{ $posts[0] -> title }}
    {{ $posts[0] -> body }}
</x-layout>