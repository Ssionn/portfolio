<div class="flex flex-col items-center justify-center" id="portfolio">
    <div
        class="flex flex-col items-center sm:items-start sm:flex-row justify-center space-x-0 sm:space-x-16 sm:space-y-0 space-y-8">
        <div>
            <img src="{{ asset('images/me.jpeg') }}" alt="Ssionn"
                class="w-full h-76 rounded-xl object-cover hover:scale-105 transition ease-in-out duration-700">
        </div>
        <div
            class="flex flex-col justify-center items-center space-y-4 sm:space-y-4 hover:scale-105 transition ease-in-out duration-700">
            <h1 class="text-3xl sm:text-4xl font-bold text-primary-superdark">
                {{ $portfolio->name ?? 'Hi, My name is No name.' }}
            </h1>

            <p class="text-start max-w-lg text-xl font-semibold text-primary-superdark">
                {{ $portfolio->description ?? 'No description.' }}
            </p>
        </div>
    </div>
</div>
