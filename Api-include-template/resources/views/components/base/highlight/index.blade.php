<pre>
    <code class="highlight text-xs">
        {{ $slot }}
    </code>
</pre>

@pushOnce('vendors')
    @vite('resources/js/vendors/highlight.js')
@endPushOnce

@pushOnce('styles')
    @vite('resources/css/vendors/highlight.css')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/highlight.js')
@endPushOnce
