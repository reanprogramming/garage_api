@props(['as' => 'div', 'placement' => 'bottom-end'])

<x-base.dynamic-tag
    data-tw-placement="{{ $placement }}"
    {{ $attributes->twMerge(['dropdown']) }}
    :as="$as"
>
    {{ $slot }}
</x-base.dynamic-tag>

@pushOnce('vendors')
    @vite('resources/js/vendors/popper.js')
    @vite('resources/js/vendors/dropdown.js')
@endPushOnce
