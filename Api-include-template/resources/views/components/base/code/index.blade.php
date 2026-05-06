<x-base.tabs>
    <x-base.tabs.list>
        <x-base.tabs.trigger>Preview</x-base.tabs.trigger>
        <x-base.tabs.trigger>Code</x-base.tabs.trigger>
    </x-base.tabs.list>
    <div @class([
        'group preview-code',
        'bg-primary/[.01] border-foreground/10 relative rounded-xl border mt-3.5 p-5',
        'before:bg-noise before:absolute before:inset-0 before:opacity-30',
        'after:bg-accent after:absolute after:inset-0 after:opacity-30 after:blur-2xl',
    ])>
        <x-base.button class="copy-button absolute right-0 top-0 z-20 mr-5 mt-5">
            <x-base.lucide
                class="group-[.preview-code.copied]:hidden"
                icon="Clipboard"
            />
            <x-base.lucide
                class="hidden group-[.preview-code.copied]:block"
                icon="Check"
            />
        </x-base.button>
        <div class="relative z-10 mt-4">
            <x-base.tabs.contents>
                {{ $slot }}
            </x-base.tabs.contents>
        </div>
    </div>
</x-base.tabs>

@pushOnce('scripts')
    @vite('resources/js/components/base/code.js')
@endPushOnce
