@props(['icon' => null, 'width' => 24, 'height' => 24])

<i
    data-lucide="{{ uncamelize($icon, '-') }}"
    {{ $attributes->twMerge('size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25') }}
></i>

@pushOnce('vendors')
    @vite('resources/js/vendors/lucide.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/lucide.js')
@endPushOnce
