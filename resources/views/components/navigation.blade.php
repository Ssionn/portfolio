<div class="flex items-center h-16 py-2 px-8 rounded-md">
    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 justify-between items-center w-full">
        <div class="flex flex-row items-center space-x-4">
            <a href="https://github.com/ssionn/portfolio" target="_blank">
                <img src="{{ asset('storage/images/github.svg') }}"
                    class="h-5 w-5 hover:scale-125 transition ease-in-out duration-300" />
            </a>
            <a href="https://www.linkedin.com/in/ssionn/" target="_blank">
                <img src="{{ asset('storage/images/linkedIn.svg') }}"
                    class="h-8 w-8 hover:scale-125 transition ease-in-out duration-300" />
            </a>
            <a href="https://x.com/ssionn2_" target="_blank">
                <img src="{{ asset('storage/images/x-logo.png') }}"
                    class="h-5 w-5 hover:scale-125 transition ease-in-out duration-300" />
            </a>

            @auth
                <a href="{{ route('admin.index') }}">
                    <img src="{{ asset('storage/images/login.png') }}"
                        class="h-7 w-7 hover:scale-125 transition ease-in-out duration-300" />
                </a>
            @endauth
        </div>

        <div class="flex flex-row space-x-4">
            {{-- Setup smooth scrolling for navigation tabs --}}
            <x-navigation-tab href="#portfolio">
                {{ __('portfolio.navigation_tabs.portfolio') }}
            </x-navigation-tab>

            <x-navigation-tab href="#who-am-i">
                {{ __('portfolio.navigation_tabs.who_am_i') }}
            </x-navigation-tab>

            <x-navigation-tab href="#projects">
                {{ __('portfolio.navigation_tabs.projects') }}
            </x-navigation-tab>
        </div>
    </div>
</div>
