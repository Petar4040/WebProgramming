<x-layout>
    <h1>{{ $title }}</h1>
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <li>No Jobs Found</li>
        @endforelse
    </ul>
</x-layout>