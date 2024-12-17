<x-panel-layout>

    <div class="p-2 sm:p-4">
        <div class="flex justify-center items-center">
            <div class="bg-primary-lighter w-full sm:w-3/4 md:w-2/3 p-4 rounded-md">
                <h1 class="font-semibold text-xl text-primary-superdark">
                    {{ __('admin.create.title') }}
                </h1>
                <span class="text-gray-500 text-sm text-primary-superdark">
                    {{ __('admin.create.description') }}
                </span>

                <div class="mt-4">
                    <form action="{{ route('admin.store') }}" method="post" class="space-y-4">
                        @csrf

                        <div class="flex flex-row items-center space-x-2">
                            <input type="text" placeholder="Project owner" value="{{ auth()->user()->name }}"
                                id="createRepoOwner" name="createRepoOwner"
                                class="w-full border-gray-200 rounded-lg placeholder:text-gray-300 bg-primary-default" />

                            <input type="text" placeholder="Project name" id="createRepoName" name="createRepoName"
                                class="w-full border-gray-200 rounded-lg placeholder:text-gray-300 bg-primary-default" />
                        </div>

                        <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-36 resize-y bg-primary-default"
                            placeholder="Add a description here" id="description" name="description"></textarea>

                        <button type="submit"
                            class="w-full text-primary-default bg-primary-light rounded-full py-2 px-4 hover:bg-primary-superdark transition-all duration-300">
                            {{ __('admin.create.button') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
</x-panel-layout>
