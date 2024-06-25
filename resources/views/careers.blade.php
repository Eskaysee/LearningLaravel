<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/job/{{ $job['id'] }}" class="block px-4 border rounded-lg">
                <div> <u> {{ $job -> employer -> name }} </u> </div>
                <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per month
            </a>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
<?php
