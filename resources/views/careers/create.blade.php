<x-layout heading="Post a Job">
    <form method="POST" action="/careers">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a Job Posting</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Create a job post to alert applications of the vacant position.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                                <x-form-input type="text" name="title" id="title" autocomplete="title" placeholder="Software Engineer" required/>
                                <x-form-error name="title"/>
                            </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary (R/month)</x-form-label>
                        <div class="mt-2">
                                <x-form-input type="text" name="salary" id="salary" placeholder="35000.00" required/>
                                <x-form-error name="salary"/>
                            </div>
                    </x-form-field>
                </div>
                <div class="mt-10">
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('careers.index') }}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit" >Save</x-form-button>
        </div>
    </form>
</x-layout>
