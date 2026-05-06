@props(['config' => '{}'])

<div
    class="toast hide [&.hide]:!hidden"
    data-config="{{ $config }}"
>
    <x-base.box>
        {{ $slot }}
    </x-base.box>
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/toastify.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/toastify.js')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/components/base/toastify.js')
@endPushOnce
