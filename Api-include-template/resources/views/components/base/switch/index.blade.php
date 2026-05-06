<div class="relative h-6 w-11">
    <input
        class="peer relative z-10 size-full cursor-pointer opacity-0"
        type="checkbox"
        {{ $attributes }}
    />
    <div class="bg-foreground/15 peer-checked:bg-foreground absolute inset-0 rounded-full transition-all">
    </div>
    <div
        class="z-4 bg-background absolute inset-0 inset-y-0 my-auto ml-0.5 size-5 rounded-full shadow transition-[margin] ease-linear peer-checked:ml-[1.35rem]">
    </div>
</div>
