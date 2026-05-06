<div class="bg-background border-foreground/70 relative size-4 rounded-full border">
    <input
        class="peer relative z-10 size-full cursor-pointer opacity-0"
        type="radio"
        {{ $attributes }}
    />
    <div
        class="z-4 [&>svg]:fill-foreground invisible absolute inset-0 flex items-center justify-center border text-white peer-checked:visible">
        <x-base.lucide
            class="size-4"
            icon="circle"
        />
    </div>
</div>
