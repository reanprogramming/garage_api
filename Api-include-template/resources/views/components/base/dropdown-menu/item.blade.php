@props(['as' => 'a'])

<x-base.dynamic-tag
    {{ $attributes->twMerge(['relative flex cursor-default select-none hover:bg-foreground/5 items-center rounded-lg px-2 py-1.5 outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50']) }}
    :as="$as"
>{{ $slot }}</x-base.dynamic-tag>
