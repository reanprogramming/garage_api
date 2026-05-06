@props(['config' => '{}'])

<x-base.input
    data-css="{{ Vite::asset('resources/css/vendors/easepick.css') }}"
    data-config="{{ $config }}"
    type="text"
    {{ $attributes->twMerge('easepick') }}
/>

@pushOnce('vendors')
    @vite('resources/js/vendors/dayjs.js')
    @vite('resources/js/vendors/easepick.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/easepick.js')
@endPushOnce
