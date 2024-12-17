<div class="flex justify-center items-center">
    <div class="bg-primary-lighter w-full sm:w-3/4 md:w-2/3 p-4 rounded-md">
        <h1 class="font-semibold text-xl text-primary-superdark">
            {{ __('admin.settings.who_editor.title') }}
        </h1>
        <span class="text-gray-500 text-sm text-primary-superdark">
            {{ __('admin.settings.who_editor.description') }}
        </span>

        <div class="mt-4">
            <form action="{{ route('admin.settings.updateWho') }}" method="post" class="space-y-4">
                @csrf

                <input type="text" placeholder="Who title" id="who_title" name="who_title"
                    value="{{ $who->name ?? '' }}"
                    class="w-full border-gray-200 rounded-lg placeholder:text-gray-300 bg-primary-default" />

                <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-10 resize-y bg-primary-default"
                    placeholder="Add a description here" id="description" name="description">{{ $who->description ?? '' }}</textarea>

                <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-10 resize-y bg-primary-default"
                    placeholder="Add a fallback here in case the description is not available" id="fallback" name="fallback">{{ $who->fallback ?? '' }}</textarea>

                <button type="submit"
                    class="w-full bg-primary-light text-primary-default rounded-full py-2 px-4 hover:bg-primary-superdark transition-all duration-300">
                    {{ __('admin.settings.who_editor.buttons.save') }}
                </button>
            </form>
        </div>
    </div>
</div>
