@props(['href' => '#'])

<a href="{{ $href }}"
    class="font-semibold text-primary-superdark hover:text-primary-light transition ease-in-out duration-300">
    {{ $slot }}
</a>
