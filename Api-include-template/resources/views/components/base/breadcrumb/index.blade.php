@props(['items' => []])

<ul
    {{ $attributes->twMerge('flex truncate gap-x-6 [--color-link:var(--color-primary)] [--color-base:var(--color-foreground)]') }}>
    @foreach ($items as $itemKey => $item)
        <li
            class="[&:not(:last-child)>a]:text-(--color-link) text-(--color-base) before:bg-(image:--background-image-chevron) relative before:absolute before:inset-y-0 before:my-auto before:-ml-4 before:size-2 before:-rotate-90 before:bg-center before:bg-no-repeat before:opacity-70 first:before:hidden">
            <a
                href=""
                {{ $attributes->twMerge('') }}
            >{{ $item }}</a>
        </li>
    @endforeach
</ul>
