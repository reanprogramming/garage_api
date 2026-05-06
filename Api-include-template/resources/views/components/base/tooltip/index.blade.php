@props(['as' => 'span', 'content' => null])

<x-base.dynamic-tag
    data-content="{{ $content }}"
    {{ $attributes->twMerge(['tooltip']) }}
    :as="$as"
>{{ $slot }}</x-base.dynamic-tag>

@pushOnce('vendors')
    @vite('resources/js/vendors/tippy.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/tippy.js')
@endPushOnce
