<img
    data-action="zoom"
    {{ $attributes }}
/>

@pushOnce('styles')
    @vite('resources/css/vendors/zoom-vanilla.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/image-zoom.js')
@endPushOnce
