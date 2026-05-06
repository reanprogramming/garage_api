@props(['as' => 'button', 'size' => 'default', 'variant' => 'default', 'filled' => false])

<x-base.dynamic-tag
    {{ $attributes->twMerge([
        '[--color:var(--color-foreground)] cursor-pointer inline-flex border items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0',
        !$filled
            ? 'bg-(--color)/20 border-(--color)/60 text-(--color) hover:bg-(--color)/5'
            : 'bg-(--color) border-(--color) text-white hover:bg-(--color)/90',
        $variant == 'default' && !$filled ? 'bg-background border-(--color)/20' : null,
        $variant == 'primary' ? '[--color:var(--color-primary)]' : null,
        $variant == 'success' ? '[--color:var(--color-success)]' : null,
        $variant == 'danger' ? '[--color:var(--color-danger)]' : null,
        $variant == 'pending' ? '[--color:var(--color-pending)]' : null,
        $variant == 'warning' ? '[--color:var(--color-warning)]' : null,
        $size == 'default' ? 'h-10 px-4 py-2' : null,
        $size == 'sm' ? 'h-9 rounded-md px-3' : null,
        $size == 'lg' ? 'h-11 rounded-md px-8' : null,
        $size == 'icon' ? 'h-10 w-10' : null,
    ]) }}
    :as="$as"
>{{ $slot }}</x-base.dynamic-tag>
