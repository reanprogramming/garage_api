@props(['width' => 'w-auto', 'height' => 'h-auto'])

<div class="{{ $width }} {{ $height }}">
    <canvas
        id="line-chart"
        {{ $attributes }}
    ></canvas>
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/chartjs.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/line-chart.js')
@endPushOnce
