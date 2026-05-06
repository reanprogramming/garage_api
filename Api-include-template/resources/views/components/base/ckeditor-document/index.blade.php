<div class="editor">
    <div class="toolbar"></div>
    <div class="bg-foreground/5 flex border-x border-b">
        <div class="bg-background mx-auto my-20 w-full max-w-4xl rounded-xl border p-14 shadow-lg">
            <div class="editable">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/ckeditor.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/ckeditor/document.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/ckeditor-document.js')
@endPushOnce
