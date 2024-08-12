<x-app-layout>
    <div class="flex justify-between items-center bg-white p-4 rounded-b-md">
        <div>
            <span class="text-2xl font-semibold">{{ __('Modify Portfolio') }}</span>
        </div>
        <div class="inline-flex space-x-4">
            <a href="{{ route('admin.create') }}" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                Create Project
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="py-2 px-4 bg-red-500 rounded-md text-white">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <div class="flex flex-col justify-center mt-36 items-center">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Project Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Project Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Project Owner
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('storage/images/gear-black.svg') }}" class="h-6 w-6 hover:scale-125 transition ease-in-out delay-150" />
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $project->repo }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $project->truncated_description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $project->owner }}
                            </td>
                            <td class="flex flex-row px-6 py-4 space-x-2">
                                <a href="{{ route('admin.edit', $project->hashid) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.delete', $project->hashid) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
