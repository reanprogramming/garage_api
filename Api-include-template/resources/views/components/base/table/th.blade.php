@aware(['variant' => null, 'dark' => null, 'bordered' => null, 'sm' => null, 'boxed' => false])

<th
    {{ $attributes->twMerge([!$boxed ? 'border-y border-foreground/10 first:border-l last:border-r bg-background' : null, 'h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0']) }}>
    {{ $slot }}
</th>
