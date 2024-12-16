<div class="flex justify-center items-center">
    <div class="bg-white w-full sm:w-3/4 md:w-2/3 p-4 rounded-md">
        <h1 class="font-semibold text-xl">
            {{ __('admin.settings.who_editor.title') }}
        </h1>
        <span class="text-gray-500 text-sm">
            {{ __('admin.settings.who_editor.description') }}
        </span>

        <div class="mt-4">
            <form action="{{ route('admin.settings.updateWho') }}" method="post" class="space-y-4">
                @csrf

                <input type="text" placeholder="Who title" id="who_title" name="who_title"
                    value="{{ $who->name ?? '' }}"
                    class="w-full border-gray-200 rounded-lg placeholder:text-gray-300" />

                <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-10 resize-y"
                    placeholder="Add a description here" id="description" name="description">{{ $who->description ?? '' }}</textarea>

                <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-10 resize-y"
                    placeholder="Add a fallback here in case the description is not available" id="fallback" name="fallback">{{ $who->fallback ?? '' }}</textarea>

                <button type="submit" class="w-full bg-primary-light hover:bg-primary-lighter p-2 rounded-md">
                    {{ __('admin.settings.who_editor.buttons.save') }}
                </button>
            </form>
        </div>
    </div>
</div>
