@props(['config' => '{}'])

<form
    class="dropzone !border-foreground/30 !rounded-xl !border-dashed"
    data-config="{{ $config }}"
    {{ $attributes }}
>
    <div class="fallback">
        <input
            name="file"
            type="file"
            multiple
        />
    </div>
    <div class="dz-message">
        {{ $slot }}
    </div>
</form>

@pushOnce('styles')
    @vite('resources/css/vendors/dropzone.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/dropzone.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/dropzone.js')
@endPushOnce
