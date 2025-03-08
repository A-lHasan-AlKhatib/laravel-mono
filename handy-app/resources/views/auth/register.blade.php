<x-layout>
    <x-slot:heading>
        Create job page
    </x-slot:heading>
    <h1>Hello from the create page</h1>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new user</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Please fill the details below.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name" required/>
                        </div>
                        <x-form-error name="name"/>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" required/>
                        </div>
                        <x-form-error name="email"/>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required/>
                        </div>
                        <x-form-error name="password"/>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirm" id="password_confirm" type="password"
                                          required/>
                        </div>
                        <x-form-error name="password_confirm"/>
                    </x-form-field>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button href="/">Cancel</x-button>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>

</x-layout>
