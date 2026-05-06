<div
    id="map"
    {{ $attributes->twMerge([
        'border rounded-lg relative flex items-end p-4 gap-1.5 cursor-grab',
        '[&>svg]:absolute [&>svg]:inset-0',
        '[--color:var(--color-foreground)] [&_.jvm-zoom-btn]:cursor-pointer [&_.jvm-zoom-btn]:shadow [&_.jvm-zoom-btn]:relative [&_.jvm-zoom-btn]:flex [&_.jvm-zoom-btn]:items-center [&_.jvm-zoom-btn]:justify-center [&_.jvm-zoom-btn]:border [&_.jvm-zoom-btn]:rounded-md [&_.jvm-zoom-btn]:w-7 [&_.jvm-zoom-btn]:h-7 [&_.jvm-zoom-btn]:bg-background [&_.jvm-zoom-btn]:hover:bg-(--color)/10 [&_.jvm-zoom-btn]:border-(--color)/20 [&_.jvm-zoom-btn]:text-(--color)',
    ]) }}
>
    <div class="absolute bottom-0 right-0 px-3 py-1 text-xs rounded-tl-lg bg-foreground/5 text-foreground/70">Map by ©
        VectorMap</div>
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/vector-map.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/vector-map.js')
@endPushOnce

@pushOnce('styles')
    @vite('resources/css/vendors/vector-map.css')
@endPushOnce
