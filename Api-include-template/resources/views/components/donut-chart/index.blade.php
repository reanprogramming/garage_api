@props(['width' => 'w-auto', 'height' => 'h-auto'])

<div class="{{ $width }} {{ $height }}">
    <canvas
        id="donut-chart"
        {{ $attributes }}
    ></canvas>
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/chartjs.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/donut-chart.js')
@endPushOnce
