<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="rounded-b-md bg-white p-2">
            <span class="text-2xl font-semibold">{{ __('Modify Portfolio') }}</span>
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
                                {{ $project->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $project->owner }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.edit', $project->hashid) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
