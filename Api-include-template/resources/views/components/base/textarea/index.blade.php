<textarea
    {{ $attributes->twMerge('flex min-h-24 w-full rounded-md border border-input bg-background px-3 py-2 ring-offset-background placeholder:text-foreground/70 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-foreground/5 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50') }}
>
    {{ $slot }}</textarea>
