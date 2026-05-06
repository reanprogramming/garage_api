<div>
    <div
        data-tw-toggle="modal"
        data-tw-target="#settings-dialog"
        @class([
            'fixed inset-y-0 right-0 z-50 my-auto flex hover:w-20 transition-all w-14 h-12 cursor-pointer border-(--color)/50 items-center border justify-center rounded-l-full shadow-lg overflow-hidden bg-background/80 [--color:var(--color-primary)]',
            'before:bg-(--color)/20 before:absolute before:inset-0',
        ])
    >
        <x-base.lucide
            class="animate-spin"
            icon="Settings"
        />
    </div>
    <x-base.dialog id="settings-dialog">
        <div class="flex flex-col gap-7 px-5 pb-6 pt-2 text-center">
            <div class="">
                <h2 class="text-lg font-medium">Themes</h2>
                <div class="opacity-70">Choose your theme</div>
                <div class="mt-5 grid grid-cols-2 gap-x-6 gap-y-4">
                    @foreach ([
        [
            'name' => 'tinker',
            'page' => 'dashboard-overview-3',
        ],
        [
            'name' => 'enigma',
            'page' => 'dashboard-overview-4',
        ],
    ] as $themeKey => $theme)
                        <a
                            class="flex flex-col gap-3 outline-none transition-transform duration-100 hover:scale-[105%]"
                            href="{{ route('theme-switcher', ['activeTheme' => $theme['name'], 'page' => $theme['page']]) }}"
                        >
                            <div @class([
                                'h-24 overflow-hidden rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background shadow-lg',
                                $activeTheme == $theme['name']
                                    ? 'ring-foreground/70 dark:ring-foreground/20'
                                    : 'ring-foreground/10',
                            ])>
                                <img
                                    src="{{ Vite::asset('resources/images/themes/' . $theme['name'] . '.png') }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                            </div>
                            <div class="text-center capitalize">{{ $theme['name'] }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
    
            <div class="">
                <h2 class="text-lg font-medium">Main Colors</h2>
                <div class="opacity-70">Choose your color</div>
                <div class="mt-5 grid grid-cols-6 gap-6">
                    @foreach (['default', '1', '2', '3', '4', '5'] as $colorKey => $colorScheme)
                        <div
                            data-theme="{{ $colorScheme }}"
                            @class([
                                'cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100',
                            ])
                        ></div>
                    @endforeach
                </div>
            </div>
            <div class="">
                <h2 class="text-lg font-medium">Appearance</h2>
                <div class="opacity-70">Choose your appearance</div>
                <div class="mt-5 grid grid-cols-3 gap-3">
                    <div
                        class="flex cursor-pointer flex-col gap-3 transition-transform duration-100 hover:scale-[110%]"
                        data-dark-mode="system"
                    >
                        <div class="bg-foreground/5 flex h-10 items-center justify-center rounded-xl">
                            <x-base.lucide icon="Settings" />
                        </div>
                        <div class="text-center capitalize">System</div>
                    </div>
                    <div
                        class="flex cursor-pointer flex-col gap-3 transition-transform duration-100 hover:scale-[110%]"
                        data-dark-mode="inactive"
                    >
                        <div class="bg-foreground/5 flex h-10 items-center justify-center rounded-xl">
                            <x-base.lucide icon="SunMoon" />
                        </div>
                        <div class="text-center capitalize">Light</div>
                    </div>
                    <div
                        class="flex cursor-pointer flex-col gap-3 transition-transform duration-100 hover:scale-[110%]"
                        data-dark-mode="active"
                    >
                        <div class="bg-foreground/5 flex h-10 items-center justify-center rounded-xl">
                            <x-base.lucide icon="MoonStar" />
                        </div>
                        <div class="text-center capitalize">Dark</div>
                    </div>
                </div>
            </div>
        </div>
    </x-base.dialog>
</div>

@pushOnce('scripts')
    @vite('resources/js/components/theme-switcher.js')
@endPushOnce
