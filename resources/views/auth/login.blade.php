<x-auth-layout>
    <div class="flex flex-col justify-center items-center min-h-screen">
        <h1 class="text-2xl font-semibold text-primary-superdark">
            {{ __('admin.title') }}
        </h1>
        <div class="bg-white w-full sm:w-1/2 md:w-1/3 rounded-md p-2 sm:p-4 mt-4">
            <h1 class="text-2xl font-semibold text-primary-superdark">
                {{ __('admin.login_title') }}
            </h1>

            <div class="mt-4">
                <form method="POST" action="{{ route('login') }}" class="space-y-2">
                    @csrf

                    <div>
                        <input type="email" name="email" id="email" class="w-full rounded-lg border-gray-200"
                            placeholder="{{ __('admin.login.fields.email') }}" required>
                    </div>

                    <div>
                        <input type="password" name="password" id="password" class="w-full rounded-lg border-gray-200"
                            placeholder="{{ __('admin.login.fields.password') }}" required>
                    </div>

                    <div>
                        <button type="submit"
                            class="py-1 w-full text-primary-superdark bg-primary-light rounded-full hover:bg-primary-lighter transition-all duration-300">
                            {{ __('admin.login.button') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
