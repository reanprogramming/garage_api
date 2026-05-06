<div {{ $attributes->twMerge('accordion relative mx-auto w-full divide-y overflow-hidden rounded-lg border') }}>
    {{ $slot }}
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/accordion.js')
@endPushOnce
