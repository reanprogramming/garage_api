@props(['backdrop' => false])

<div
    data-tw-backdrop="{{ $backdrop ? 'static' : null }}"
    @class([
        'modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0',
        '[&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0',
        '[&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]',
    ])
    {{ $attributes->except(['class']) }}
>
    <x-base.box
        {{ $attributes->twMerge('before:bg-background/60 dark:before:shadow-background before:shadow-foreground/60 z-50 mx-auto -mt-16 p-6 transition-[margin-top,transform] duration-[0.4s,0.3s] before:rounded-3xl before:shadow-2xl after:rounded-3xl group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] sm:max-w-lg')->only('class') }}
    >{{ $slot }}</x-base.box>
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/modal.js')
@endPushOnce
