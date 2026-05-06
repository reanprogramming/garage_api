@aware(['boxed' => false, 'hover' => null, 'striped' => null])

<tr
    {{ $attributes->twMerge([
        'border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted',
        $boxed ? 'border-b-0' : null,
    ]) }}>
    {{ $slot }}
</tr>
