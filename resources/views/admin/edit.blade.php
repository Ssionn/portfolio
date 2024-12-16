<x-panel-layout>
    <div class="p-2 sm:p-4">
        <div class="flex justify-center items-center">
            <div class="bg-white w-full sm:w-3/4 md:w-2/3 p-4 rounded-md">
                <h1 class="font-semibold text-xl">
                    {{ __('admin.edit.title', ['repository' => $project->owner . '/' . $project->repo]) }}
                </h1>

                <div class="mt-4">
                    <form action="{{ route('admin.update', $project->hashid) }}" method="post" class="space-y-4">
                        @csrf

                        <div class="flex flex-row items-center space-x-2">
                            <input type="text" placeholder="Project owner" id="createRepoOwner"
                                value="{{ auth()->user()->name }}" name="createRepoOwner"
                                class="w-full border-gray-200 rounded-lg placeholder:text-gray-300" />

                            <input type="text" placeholder="Project name" id="createRepoName" name="createRepoName"
                                class="w-full border-gray-200 rounded-lg placeholder:text-gray-300" />
                        </div>

                        <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-36 resize-y"
                            placeholder="Add a description here" id="description" name="description"></textarea>

                        <button type="submit" class="w-full bg-primary-light hover:bg-primary-lighter p-2 rounded-md">
                            {{ __('admin.create.button') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-panel-layout>
