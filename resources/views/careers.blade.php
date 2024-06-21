<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per month
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
<?php
