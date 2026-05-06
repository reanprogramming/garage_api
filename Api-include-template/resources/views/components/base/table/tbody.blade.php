@aware(['striped' => false])

<tbody
    {{ $attributes->twMerge(['[&_tr:last-child]:border-0', $striped ? '[&_tr:nth-child(odd)_td]:bg-foreground/5' : null]) }}
>
    {{ $slot }}
</tbody>
