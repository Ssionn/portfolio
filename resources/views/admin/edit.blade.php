<x-app-layout>

    <div class="flex justify-center items-center">
        <div class="bg-white rounded-b-md p-2">
            <span class="text-2xl font-semibold">{{ __($project->repo) }}</span>
        </div>
    </div>

    <div class="flex flex-col justify-center mt-36 items-center p-2">
        <div class="bg-white w-full sm:w-2/3 md:w-1/3 p-4 rounded-md">
            <h1 class="text-center p-2 font-semibold text-xl">
                {{ __('Project details') }}
            </h1>

            <div class="mt-4">
                <form action="" method="post" class="space-y-4">
                    @csrf
                    @method('PATCH')

                    <input
                        type="text"
                        placeholder="Project Owner"
                        id="repoOwner"
                        name="repoOwner"
                        value="{{ old('projectOwner', $project->owner) }}"
                        class="appearance-none rounded-md placeholder:text-gray-300 border border-gray-300 w-full bg-gray-100"
                    />

                    <input
                        type="text"
                        placeholder="Project name"
                        id="repoName"
                        name="repoName"
                        value="{{ old('projectName', $project->repo) }}"
                        class="appearance-none rounded-md placeholder:text-gray-300 border border-gray-300 w-full bg-gray-100"
                    />

                    <textarea
                        class="w-full border border-gray-300 bg-gray-100 placeholder:text-gray-300 rounded-md resize-y" placeholder="Add a description here."
                        id="description"
                        name="description"
                    >
                        {{ preg_replace('/\s+/', ' ', old('description', $project->description)) }}
                    </textarea>

                    <button type="submit" class="w-full bg-blue-400 p-2 rounded-md text-white">
                        {{ __('Save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
