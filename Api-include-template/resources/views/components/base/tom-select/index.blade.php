@props(['config' => '{}'])

<select
    data-config="{{ $config }}"
    {{ $attributes->twMerge('tom-select') }}
>
    {{ $slot }}
</select>

@pushOnce('styles')
    @vite('resources/css/vendors/tom-select.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tom-select.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/tom-select.js')
@endPushOnce
