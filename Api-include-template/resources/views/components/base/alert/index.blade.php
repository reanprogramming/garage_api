@props(['as' => 'div', 'variant' => 'default', 'filled' => false, 'dismissible' => false])

<x-base.dynamic-tag
    :as="$as"
    {{ $attributes->twMerge([
        'alert [--color:var(--color-foreground)] flex border items-center rounded-xl p-4',
        !$filled ? 'bg-(--color)/20 border-(--color)/60 text-(--color)' : 'bg-(--color) border-(--color) text-white',
        $variant == 'default' && !$filled ? 'bg-background border-(--color)/20' : null,
        $variant == 'primary' ? '[--color:var(--color-primary)]' : null,
        $variant == 'success' ? '[--color:var(--color-success)]' : null,
        $variant == 'danger' ? '[--color:var(--color-danger)]' : null,
        $variant == 'pending' ? '[--color:var(--color-pending)]' : null,
        $variant == 'warning' ? '[--color:var(--color-warning)]' : null,
    ]) }}
>
    {{ $slot }}
    @if ($dismissible)
        <a
            class="ml-auto cursor-pointer"
            data-tw-dismiss="alert"
            type="button"
            aria-label="Close"
        >
            <x-base.lucide
                class="w-4 h-4 ml-auto"
                icon="X"
            />
        </a>
    @endif
</x-base.dynamic-tag>

@pushOnce('vendors')
    @vite('resources/js/vendors/alert.js')
@endPushOnce
