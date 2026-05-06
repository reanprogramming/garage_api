<ul
    role="tablist"
    {{ $attributes->twMerge('bg-foreground/5 relative z-0 mb-2 flex h-10 w-full select-none items-center justify-center rounded-xl p-1 [&>*]:flex-1') }}
>
    {{ $slot }}
</ul>
