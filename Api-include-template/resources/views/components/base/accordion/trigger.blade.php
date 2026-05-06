<div class="accordion-header">
    <button
        {{ $attributes->twMerge('accordion-button flex w-full select-none items-center justify-between p-4 text-left font-medium group-hover:underline') }}
    >
        <span>{{ $slot }}</span>
        <span class="duration-200 ease-out group-[.accordion-item.show]:rotate-180">
            <x-base.lucide
                class="size-4"
                icon="ChevronDown"
            />
        </span>
    </button>
</div>
