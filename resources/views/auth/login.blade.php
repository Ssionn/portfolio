<x-auth-layout>


<div class="flex justify-between items-center bg-white p-4 rounded-b-md">
    <div>
        <span class="text-2xl font-semibold">{{ __('Admin Panel') }}</span>
    </div>
</div>

<div class="flex flex-col justify-center items-center mt-36">
    <div class="bg-white w-1/3 rounded-md p-2">
        <h1 class="text-2xl font-semibold text-center items-center mt-2">
            {{ __('Login') }}
        </h1>
        <div class="p-2">
            <form action="{{ route('login') }}" method="post" class="space-y-4">
                @csrf

                <input name="email" id="email" type="text" class="bg-gray-100 rounded-md p-2 w-full placeholder:text-gray-400" placeholder="Username"/>

                @if ($errors->has('email'))
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                <input name="password" id="password" type="password" class="bg-gray-100 rounded-md p-2 w-full placeholder:text-gray-400" placeholder="Password" />

                <button type="submit" class="w-full bg-blue-400 p-2 rounded-md text-white">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>

</x-auth-layout>
