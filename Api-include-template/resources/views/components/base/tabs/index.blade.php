<div {{ $attributes->twMerge('tabs relative w-full') }}>
    {{ $slot }}
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/tab.js')
@endPushOnce
