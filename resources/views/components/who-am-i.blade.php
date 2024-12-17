<div class="flex flex-col items-center justify-center w-full" id="who-am-i">
    <div class="bg-primary-lighter rounded-lg p-8 md:w-3/4 sm:w-2/3 w-full">
        <div
            class="flex flex-col items-center sm:flex-row justify-center space-x-0 sm:space-x-16 sm:space-y-0 space-y-8">
            <div
                class="flex flex-col justify-center items-center sm:space-y-8 hover:scale-105 transition ease-in-out duration-700">
                <h1 class="text-3xl sm:text-4xl font-bold text-primary-superdark">
                    {{ __('portfolio.who_am_i.title', ['title' => $who->name ?? 'Who am I?']) }}
                </h1>
                <p class="max-w-lg text-start text-xl font-semibold text-primary-superdark">
                    {{ __('portfolio.who_am_i.description', ['description' => $who->description ?? 'Something about me']) }}
                </p>
            </div>
            <div>
                <img src="{{ asset('storage/images/php.png') }}" alt="Ssionn"
                    class="w-72 h-76 rounded-xl object-cover hover:scale-105 transition ease-in-out duration-700">
            </div>
        </div>
    </div>
</div>
