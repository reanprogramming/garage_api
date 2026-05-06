@aware(['dark' => null, 'bordered' => null, 'sm' => null, 'boxed' => false])

<td
    {{ $attributes->twMerge([$boxed ? 'shadow-[3px_3px_5px_#0000000b] first:rounded-l-xl last:rounded-r-xl' : null, 'box rounded-none p-4 align-middle [&:has([role=checkbox])]:pr-0', 'border-y border-foreground/10 bg-background first:border-l last:border-r']) }}>
    {{ $slot }}
</td>
