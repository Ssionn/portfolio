<x-app-layout>
    <div class="flex flex-row space-x-4 justify-between items-center bg-white p-4 rounded-b-md">
        <div class="">
            <span class="text-xl sm:text-2xl font-semibold">{{ __('Modify Portfolio') }}</span>
        </div>
        <div class="flex flex-row sm:space-y-0 space-x-4">
            <a href="{{ route('admin.create') }}"
                class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-center">
                Create
            </a>
            <form action="{{ route('logout') }}" method="post" class="w-full sm:w-auto">
                @csrf
                <button type="submit" class="py-2 px-4 bg-red-500 rounded-md text-white w-full sm:w-auto text-center">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <div class="flex flex-col mt-10 items-center p-2 sm:p-0 space-y-4">
        @foreach ($projects as $project)
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg w-full sm:w-2/4 md:w-1/4 p-4 relative">
                <div class="absolute top-4 right-4">
                    <a href="{{ route('portfolio') }}">
                        <img src="{{ asset('storage/images/gear-black.svg') }}"
                            class="h-6 w-6 hover:scale-125 transition ease-in-out delay-150" />
                    </a>
                </div>

                <div class="flex flex-col">
                    <span class="text-lg font-medium text-gray-900 dark:text-white">{{ $project->repo }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $project->truncated_description }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400 mt-1">Owned by: {{ $project->owner }}</span>
                </div>

                <div class="flex justify-end mt-4 space-x-4">
                    <a href="{{ route('admin.edit', $project->hashid) }}"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('admin.delete', $project->hashid) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 dark:text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
