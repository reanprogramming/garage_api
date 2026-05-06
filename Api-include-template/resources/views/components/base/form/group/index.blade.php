<div
    {{ $attributes->twMerge(['flex [&>*:not(:first-child):not(:last-child)]:!rounded-none [&>*:not(:last-child)]:border-e-transparent [&>*]:first:!rounded-e-none [&>*]:first:rounded-s-lg [&>*]:last:rounded-e-lg [&>*]:last:!rounded-s-none']) }}>
    {{ $slot }}</div>
