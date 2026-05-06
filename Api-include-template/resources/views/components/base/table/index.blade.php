@props(['boxed' => false, 'dark' => null, 'bordered' => null, 'hover' => null, 'striped' => null, 'sm' => null])

<div class="relative w-full overflow-auto">
    <table
        {{ $attributes->twMerge('w-full caption-bottom', $boxed ? 'border-separate border-spacing-y-[10px]' : null) }}
    >
        {{ $slot }}
    </table>
</div>
