@aware(['boxed' => false])
@props(['variant' => null])

<thead {{ $attributes->twMerge([$boxed ? '[&_tr]:border-b-0 [&_tr_th]:h-10' : '[&_tr]:border-b']) }}>
    {{ $slot }}
</thead>
