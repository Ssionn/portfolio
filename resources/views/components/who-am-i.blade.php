<div class="mx-auto flex flex-col items-center justify-center" id="who-am-i">
    <div
        class="flex flex-col items-center sm:items-start sm:flex-row justify-center space-x-0 sm:space-x-16 sm:space-y-0 space-y-8">
        <div
            class="flex flex-col justify-center items-center sm:space-y-8 hover:scale-105 transition ease-in-out duration-700">
            <h1 class="text-3xl sm:text-4xl font-bold text-primary-superdark">
                {{ __('portfolio.who_am_i.title', ['title' => $who->name]) }}
            </h1>
            <p class="max-w-lg text-center text-xl font-semibold text-primary-superdark">
                {{ __('portfolio.who_am_i.description', ['description' => $who->description]) }}
            </p>
        </div>
        <div>
            <img src="{{ asset('images/php.png') }}" alt="Ssionn"
                class="w-72 h-72 rounded-xl object-cover hover:scale-105 transition ease-in-out duration-700">
        </div>
    </div>
</div>
