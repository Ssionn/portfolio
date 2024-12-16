<x-panel-layout>
    <div class="p-2 sm:p-4">
        <div class="flex justify-center items-center">
            <div class="w-full sm:w-3/4 md:w-2/3">
                @foreach ($projects as $project)
                    <div class="mt-2">
                        <a href="{{ route('admin.edit', $project->hashid) }}">
                            <div class="flex flex-col bg-white rounded-md p-4">
                                <span
                                    class="text-gray-800 font-semibold">{{ $project->owner }}/{{ $project->repo }}</span>
                                <div class="flex flex-row space-x-2">
                                    <span class="inline-flex items-center text-gray-800 font-semibold">
                                        {{ $project->commit_count }} <x-eos-commit class="w-4 h-4" />
                                    </span>
                                    <span class="inline-flex items-center text-gray-800 font-semibold">
                                        {{ $project->star_count }} <x-heroicon-s-star class="w-4 h-4" />
                                    </span>
                                    <span class="inline-flex items-center text-gray-800 font-semibold">
                                        {{ $project->fork_count }} <x-jam-fork class="w-4 h-4" />
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-panel-layout>
