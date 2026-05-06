@props(['width' => 'w-auto', 'height' => 'h-auto'])

<div class="{{ $width }} {{ $height }}">
    <canvas
        id="simple-line-chart-3"
        {{ $attributes }}
    ></canvas>
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/chartjs.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/simple-line-chart-3.js')
@endPushOnce
