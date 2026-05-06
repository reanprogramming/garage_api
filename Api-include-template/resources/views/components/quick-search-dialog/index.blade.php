<x-base.dialog
    class="sm:max-w-2xl"
    id="quick-search-modal"
>
    <div class="-mx-5 -mt-5">
        <div class="relative border-b border-dashed">
            <x-base.lucide
                class="absolute inset-y-0 my-auto ml-4"
                icon="Search"
            />
            <x-base.input
                class="w-full pl-12 bg-transparent border-none pr-19 h-14 focus:ring-offset-transparent focus-visible:ring-transparent"
                type="text"
                placeholder="Quick search..."
            />
            <div class="absolute inset-y-0 right-0 flex items-center h-6 px-2 my-auto mr-4 border rounded-lg">
                esc</div>
        </div>
        <div class="flex flex-wrap gap-2 px-5 mt-4">
            <a
                class="hover:bg-foreground/5 flex items-center gap-x-1.5 rounded-full border px-3 py-0.5"
                href=""
            >
                <x-base.lucide
                    class="size-4"
                    icon="Users2"
                />
                Users
            </a>
            <a
                class="hover:bg-foreground/5 flex items-center gap-x-1.5 rounded-full border px-3 py-0.5"
                href=""
            >
                <x-base.lucide
                    class="size-4"
                    icon="Building2"
                />
                Departments
            </a>
            <a
                class="hover:bg-foreground/5 flex items-center gap-x-1.5 rounded-full border px-3 py-0.5"
                href=""
            >
                <x-base.lucide
                    class="size-4"
                    icon="KanbanSquare"
                />
                Products
            </a>
            <a
                class="hover:bg-foreground/5 flex items-center gap-x-1.5 rounded-full border px-3 py-0.5"
                href=""
            >
                <x-base.lucide
                    class="size-4"
                    icon="MailCheck"
                />
                Mails
            </a>
        </div>
        <div class="px-5 py-4">
            <div class="flex items-center">
                <div class="text-xs uppercase opacity-70">
                    Users
                </div>
                <a
                    class="ml-auto text-xs opacity-70"
                    href=""
                >
                    See All
                </a>
            </div>
            <div class="mt-3.5 flex flex-col gap-1">
                @foreach (array_slice($fakers, 0, 3) as $faker)
                    <a
                        class="hover:border-foreground/10 hover:bg-foreground/5 -mx-1 flex items-center gap-2.5 rounded-xl border border-transparent p-1"
                        href=""
                    >
                        <x-base.avatar
                            class="size-8"
                            src="{{ Vite::asset($faker['photos'][2]) }}"
                        />
                        <div class="font-medium truncate">
                            {{ $faker['users'][0]['name'] }}
                        </div>
                        <div class="hidden opacity-70 sm:block">
                            {{ $faker['jobs'][0] }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="px-5 py-4 border-t border-dashed">
            <div class="flex items-center">
                <div class="text-xs uppercase opacity-70">
                    Departments
                </div>
                <a
                    class="ml-auto text-xs opacity-70"
                    href=""
                >
                    See All
                </a>
            </div>
            <div class="mt-3.5 flex flex-col gap-1">
                @foreach (array_slice($fakers, 0, 3) as $faker)
                    <a
                        class="hover:border-foreground/10 hover:bg-foreground/5 -mx-1 flex items-center gap-2.5 rounded-xl border border-transparent p-1"
                        href=""
                    >
                        <div
                            class="flex items-center justify-center overflow-hidden border rounded-lg border-primary/10 bg-primary/10 text-primary size-8">
                            @if (mt_rand(0, 1))
                                <x-base.lucide
                                    class="stroke-1"
                                    icon="Store"
                                />
                            @else
                                <x-base.lucide
                                    class="stroke-1"
                                    icon="Hotel"
                                />
                            @endif
                        </div>
                        <div class="font-medium truncate">
                            {{ $faker['products'][0]['name'] }}
                        </div>
                        <div class="hidden opacity-70 sm:block">
                            {{ $faker['products'][0]['category'] }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="px-5 py-4 border-t border-dashed">
            <div class="flex items-center">
                <div class="text-xs uppercase opacity-70">
                    Products
                </div>
                <a
                    class="ml-auto text-xs opacity-70"
                    href=""
                >
                    See All
                </a>
            </div>
            <div class="mt-3.5 flex flex-col gap-1">
                @foreach (array_slice($fakers, 0, 3) as $faker)
                    <a
                        class="hover:border-foreground/10 hover:bg-foreground/5 -mx-1 flex items-center gap-2.5 rounded-xl border border-transparent p-1"
                        href=""
                    >
                        <x-base.avatar
                            class="size-8"
                            src="{{ Vite::asset($faker['images'][2]) }}"
                        />
                        <div class="font-medium truncate">
                            {{ $faker['foods'][0]['name'] }}
                        </div>
                        <div class="hidden opacity-70 sm:block">
                            {{ $faker['products'][1]['category'] }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-base.dialog>

