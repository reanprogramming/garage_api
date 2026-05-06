<div
    {{ $attributes->twMerge('bg-(--color)/20 border-(--color)/60 text-medium text-(--color) flex cursor-pointer items-center rounded-full border px-2 py-px text-xs [--color:var(--color-foreground)]') }}>
    {{ $slot }}
</div>
