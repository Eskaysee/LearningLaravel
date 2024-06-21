<x-layout>
    <x-slot:heading>Job: {{ $job['title'] }}</x-slot:heading>
    <h1 class="font-bold text-lg">Salary</h1>
    <p>
        This job pays {{ $job['salary'] }} per month.
    </p>
</x-layout>
