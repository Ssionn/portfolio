<x-panel-layout>
    <div class="p-2 sm:p-4">
        <div class="flex justify-center items-center">
            <div class="bg-primary-lighter w-full sm:w-3/4 md:w-2/3 p-4 rounded-md">
                <div class="inline-flex justify-between items-center w-full">
                    <h1 class="font-semibold text-xl text-primary-superdark">
                        {{ __('admin.edit.title', ['repository' => $project->owner . '/' . $project->repo]) }}
                    </h1>
                    <div>
                        <form action="{{ route('admin.delete', $project->hashid) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 hover:bg-red-600 p-2 rounded-md text-white">
                                {{ __('admin.edit.buttons.delete') }}
                            </button>
                        </form>
                    </div>
                </div>

                <div class="mt-4">
                    <form action="{{ route('admin.update', $project->hashid) }}" method="post" class="space-y-4">
                        @csrf
                        @method('PATCH')

                        <div class="flex flex-row items-center space-x-2">
                            <input type="text" placeholder="Project owner" id="repoOwner"
                                value="{{ auth()->user()->name }}" name="repoOwner"
                                class="w-full border-gray-200 rounded-lg placeholder:text-gray-300 bg-primary-default" />

                            <input type="text" placeholder="Project name" id="repoName" value="{{ $project->repo }}"
                                name="repoName"
                                class="w-full border-gray-200 rounded-lg placeholder:text-gray-300 bg-primary-default" />
                        </div>

                        <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-36 resize-y bg-primary-default"
                            placeholder="Add a description here" id="description" name="description">{{ $project->description }}</textarea>

                        <button type="submit"
                            class="w-full text-primary-default bg-primary-light rounded-full py-2 px-4 hover:bg-primary-superdark transition-all duration-300">
                            {{ __('admin.edit.buttons.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-panel-layout>
