<div class="flex justify-center items-center">
    <div class="bg-primary-lighter w-full sm:w-3/4 md:w-2/3 p-4 rounded-md">
        <h1 class="font-semibold text-xl text-primary-superdark">
            {{ __('admin.settings.hero_editor.title') }}
        </h1>
        <span class="text-gray-500 text-sm text-primary-superdark">
            {{ __('admin.settings.hero_editor.description') }}
        </span>

        <div class="mt-4">
            <form action="{{ route('admin.settings.updateHero') }}" method="post" class="space-y-4">
                @csrf

                <input type="text" placeholder="Hero title" id="hero_title" value="{{ $portfolio->name ?? '' }}"
                    name="hero_title"
                    class="w-full border-gray-200 rounded-lg placeholder:text-gray-300 bg-primary-default" />

                <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-10 resize-y bg-primary-default"
                    placeholder="Add a description here" id="description" name="description">{{ $portfolio->description ?? '' }}</textarea>

                <textarea class="w-full border border-gray-300 placeholder:text-gray-300 rounded-md h-10 resize-y bg-primary-default"
                    placeholder="Add a fallback here in case the description is not available" id="fallback" name="fallback">{{ $portfolio->fallback ?? '' }}</textarea>

                <button type="submit"
                    class="w-full bg-primary-light text-primary-default rounded-full py-2 px-4 hover:bg-primary-superdark transition-all duration-300">
                    {{ __('admin.settings.hero_editor.buttons.save') }}
                </button>
            </form>
        </div>
    </div>
</div>
