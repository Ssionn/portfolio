<x-app-layout>
    <div class="p-4">
        <x-navigation />

        <div class="mt-12 sm:mt-16 lg:mt-20">
            <x-hero-banner :portfolio="$portfolio" />
        </div>

        <div class="mt-12 sm:mt-16 lg:mt-36">
            <x-who-am-i title="Who am I?"
                description="A no bullsh!t programmer, I love to learn new things and am not afraid to ask. And if you really want to know, I use PHP mostly with a little javascript. (But we don't talk about that)" />
        </div>

        <div class="mt-12 sm:mt-16 lg:mt-36">
            <x-projects :projects="$projects" />
        </div>
</x-app-layout>
