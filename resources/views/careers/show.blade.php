<x-layout>
    <x-slot:heading>Role: {{ $job['title'] }}</x-slot:heading>
    <h1 class="font-bold text-lg">Salary</h1>
    <p>
        This job pays R{{ $job['salary'] }} per month.
    </p>
</x-layout>
