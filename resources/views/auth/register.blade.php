<x-layout heading="Register an Account">
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="full_name">Full Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="full_name" id="full_name" placeholder="Name Surname" required/>
                            <x-form-error name="full_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email Address</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="user@domain.com" required/>
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" required/>
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Retype Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation" required/>
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>
                </div>
                <div class="mt-10">
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit" >Register</x-form-button>
        </div>
    </form>
</x-layout>
