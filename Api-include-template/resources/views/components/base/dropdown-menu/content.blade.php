<x-base.box
    class="dropdown-menu invisible absolute z-50 p-1 opacity-0 before:backdrop-blur-xl [&.show]:visible [&.show]:opacity-100"
>
    <div {{ $attributes->twMerge('dropdown-content w-56') }}>
        {{ $slot }}
    </div>
</x-base.box>
