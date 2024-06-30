<x-layout heading="Sign In">
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email_address">Email Address</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email_address" id="email_address" :value="old('email_address')" required/>
                            <x-form-error name="email_address"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" required/>
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>
                </div>
                <div class="mt-10">
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit" >Sign In</x-form-button>
        </div>
    </form>
</x-layout>
