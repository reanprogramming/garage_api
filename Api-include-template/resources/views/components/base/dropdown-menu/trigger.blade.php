@props(['as' => 'button'])

<x-base.dynamic-tag
    data-tw-toggle="dropdown"
    {{ $attributes->twMerge(['dropdown-toggle cursor-pointer relative z-[51]']) }}
    :as="$as"
>{{ $slot }}</x-base.dynamic-tag>
