<div class="flex justify-center items-center p-2 w-full">
    <div class="h-16 flex items-center py-2 px-8 bg-primary-lighter rounded-lg w-full sm:3/4 md:w-2/3">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="flex flex-row items-center space-x-4">
                <x-admin-navigation-tab active="{{ request()->routeIs('admin.index') }}"
                    href="{{ route('admin.index') }}">
                    {{ __('admin.panel_navigation.navigation_tabs.home') }}
                </x-admin-navigation-tab>

                <x-admin-navigation-tab active="{{ request()->routeIs('admin.create') }}"
                    href="{{ route('admin.create') }}">
                    {{ __('admin.panel_navigation.navigation_tabs.create') }}
                </x-admin-navigation-tab>
            </div>

            <div class="flex flex-row space-x-4 justify-end">
                <button data-dropdown-toggle="user_dropdown"
                    class="hover:scale-110 text-primary-superdark transition ease-in-out duration-300">
                    <span class="text-lg font-semibold">{{ auth()->user()->name }}</span>
                </button>
            </div>
        </div>
    </div>

    <div id="user_dropdown" class="z-10 hidden bg-primary-lighter divide-y divide-gray-100 rounded-lg shadow w-44">
        <ul class="py-2 text-sm text-primary-superdark" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="{{ route('portfolio') }}"
                    class="block px-4 py-2 hover:bg-primary-light hover:text-primary-default">
                    <span class="text-sm">{{ __('admin.panel_navigation.dropdown.portfolio') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.index') }}"
                    class="block px-4 py-2 hover:bg-primary-light hover:text-primary-default">
                    <span class="text-sm">{{ __('admin.panel_navigation.dropdown.settings') }}</span>
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <button type="submit"
                        class="block px-4 py-2 w-44 text-start hover:bg-primary-light text-red-500 hover:text-primary-default">
                        <span class="text-sm">{{ __('admin.panel_navigation.dropdown.logout') }}</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
