<x-layout>
    <x-slot:heading>Role: {{ $job['title'] }}</x-slot:heading>
    <h1 class="font-bold text-lg">Salary</h1>
    <p>
        This job pays R{{ $job['salary'] }} per month.
    </p>
    <div class="flex">
        @can('edit', $job)
        <div class="flex items-center">
            <p class="mt-3">
                <button form="delete-form" class="text-red-700 font-bold">Delete Job</button>
            </p>
        </div>
        <div>
{{--            @can('edit-job', $job)--}}
                <p class="mt-3">
                    <x-button href="/careers/{{$job->id}}/edit">Edit Job</x-button>
                </p>
{{--            @endcan--}}
        </div>
        @endcan
    </div>
    <form action="/careers/{{$job->id}}" id="delete-form" method="Post" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
