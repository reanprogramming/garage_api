@props(['src' => '', 'title' => null])

<x-base.tooltip
    {{ $attributes->twMerge('border-(--color)/5 block relative size-11 flex-none overflow-hidden rounded-full border-3 ring-1 ring-(--color)/25 [--color:var(--color-primary)]') }}
    :content="$title"
>
    <img
        class="absolute top-0 size-full object-cover"
        src="{{ $src }}"
        alt="Midone - Tailwind Admin Dashboard Template"
    />
</x-base.tooltip>
