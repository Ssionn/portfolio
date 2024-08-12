<x-auth-layout>

<div class="flex justify-center items-center">
    <div class="bg-white w-1/3 rounded-b-md p-2">
        <div class="flex flex-col p-2 font-semibold text-2xl text-center">
            {{ __('Admin Panel') }}
        </div>
    </div>
</div>

<div class="flex flex-col justify-center items-center mt-36">
    <div class="bg-white w-1/3 rounded-md p-2">
        <div class="p-2">
            <form action="{{ route('login') }}" method="post" class="space-y-4">
                @csrf

                <input name="name" id="name" type="text" class="bg-gray-100 rounded-md p-2 w-full placeholder:text-gray-400" placeholder="Username"/>

                <input name="password" id="password" type="password" class="bg-gray-100 rounded-md p-2 w-full placeholder:text-gray-400" placeholder="Password" />

                <button type="submit" class="w-full bg-blue-400 p-2 rounded-md text-white">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>

</x-auth-layout>
