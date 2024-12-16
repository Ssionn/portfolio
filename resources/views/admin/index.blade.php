<x-panel-layout>
    <div class="p-2 sm:p-4">
        <div class="flex justify-center items-center">
            <div class="w-full sm:w-3/4 md:w-2/3">
                @foreach ($projects as $project)
                    <div class="mt-2">
                        <a href="{{ route('admin.edit', $project->hashid) }}">
                            <div class="flex flex-row justify-between items-center bg-white rounded-md p-4">
                                <span
                                    class="text-gray-800 font-semibold">{{ $project->owner }}/{{ $project->repo }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-panel-layout>
