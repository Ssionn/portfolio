<x-app-layout>
    <div class="p-4">
        <x-navigation />

        <div class="mt-20">
            <x-hero-banner :portfolio="$portfolio" />
        </div>

        <div class="mt-36">
            <x-who-am-i :who="$who" />
        </div>

        <div class="mt-36">
            <x-projects :projects="$projects" />
        </div>
</x-app-layout>
