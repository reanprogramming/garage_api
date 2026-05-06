@props(['config' => '{}'])

<div
    data-config="{{ $config }}"
    {{ $attributes->twMerge('tiny-slider') }}
>
    {{ $slot }}
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/tiny-slider.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tiny-slider.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/tiny-slider.js')
@endPushOnce
