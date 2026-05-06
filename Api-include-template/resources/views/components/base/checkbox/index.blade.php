<div class="bg-background border-foreground/70 relative size-4 rounded-sm border">
    <input
        class="peer relative z-10 size-full cursor-pointer opacity-0"
        type="checkbox"
        {{ $attributes }}
    />
    <div
        class="z-4 bg-foreground invisible absolute inset-0 flex items-center justify-center text-white peer-checked:visible">
        <x-base.lucide
            class="size-4"
            icon="check"
        />
    </div>
</div>
