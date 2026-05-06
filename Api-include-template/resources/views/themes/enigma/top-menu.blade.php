@extends('../themes/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div @class([
        'enigma',
        'min-h-screen bg-[color-mix(in_oklch,_var(--color-background),_var(--color-foreground)_3%)] dark:bg-background pt-7',
        'before:bg-noise dark:before:bg-foreground/[.01] before:fixed before:inset-0 before:opacity-20',
        'after:bg-accent after:bg-contain after:fixed after:inset-0 after:blur-xl after:opacity-[.25]',
        '[--color-nav-foreground:var(--color-background)] dark:[--color-nav-foreground:var(--color-foreground)]',
    ])>
        <div @class([
            'relative z-30 flex h-16 items-center mx-4',
            'before:inset-0 before:absolute before:bg-primary before:border dark:before:bg-[color-mix(in_oklch,_var(--color-background),_white_14%)] before:rounded-2xl',
            'after:inset-0 after:absolute after:bg-primary/30 after:mx-4 after:border dark:after:bg-[color-mix(in_oklch,_var(--color-background),_white_14%)] after:z-[-1] after:rounded-2xl after:-mt-3',
        ])>
            <a
                href=""
                @class([
                    'relative text-(--color-nav-foreground) hidden h-full items-center px-7 xl:flex',
                    'before:inset-y-0 before:w-px before:right-0 before:bg-(--color-nav-foreground)/20 before:absolute before:my-5',
                ])
            >
                <div
                    class="from-theme-1 to-theme-2 flex size-[34px] items-center justify-center rounded-lg bg-gradient-to-r">
                    <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                        <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                        </div>
                        <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                        <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                        </div>
                    </div>
                </div>
                <div class="ml-3.5">
                    <span class="text-base font-medium">Midone</span>
                    <span class="text-base font-light">Enigma</span>
                </div>
            </a>
            <div class="relative flex h-full grow items-center gap-5 px-7">
                <div
                    class="open-mobile-menu border-(--color-nav-foreground)/30 mr-auto flex size-9 cursor-pointer items-center justify-center rounded-xl border xl:hidden">
                    <x-base.lucide
                        class="rotate-90 [--color:var(--color-nav-foreground)]"
                        icon="ChartNoAxesColumn"
                    />
                </div>
                <x-base.breadcrumb
                    class="mr-auto hidden [--background-image-chevron:var(--background-image-chevron-light)] [--color-base:--alpha(var(--color-nav-foreground)/70%)] [--color-link:var(--color-nav-foreground)] xl:flex"
                    :items="['Apps', 'Dashboards', 'Overview']"
                />
                <div
                    class="quick-search-toggle bg-(--color-nav-foreground)/10 border-(--color-nav-foreground)/30 text-(--color-nav-foreground) hover:ring-foreground/5 flex h-9 cursor-pointer items-center rounded-full border px-4 ring-1 ring-transparent ring-offset-2 ring-offset-transparent">
                    <div class="flex items-center gap-3 opacity-70">
                        <x-base.lucide icon="Search" />
                        ⌘K
                    </div>
                </div>
                <div class="group/notifications relative flex h-9 items-center">
                    <x-base.lucide
                        class="[--color:var(--color-nav-foreground)]"
                        icon="Bell"
                    />
                    <div class="hidden group-hover/notifications:block">
                        <x-base.box
                            class="before:shadow-foreground/5 absolute right-0 top-0 z-50 -mr-0.5 -mt-0.5 flex w-96 flex-col gap-2.5 px-6 py-5 before:rounded-2xl before:shadow-xl before:backdrop-blur after:rounded-2xl"
                        >
                            <div class="flex place-content-between items-center">
                                <div class="font-medium">Notifications</div>
                                <a
                                    class="text-primary text-xs"
                                    href=""
                                >View More</a>
                            </div>
                            <div class="mt-1 flex flex-col gap-2.5">
                                @foreach (array_slice($fakers, 0, 5) as $fakerKey => $faker)
                                    <a
                                        class="hover:border-foreground/10 hover:bg-foreground/5 -mx-2 flex items-center gap-3.5 rounded-2xl border border-transparent p-2"
                                        href=""
                                    >
                                        <x-base.avatar
                                            class="size-11"
                                            src="{{ Vite::asset($faker['photos'][2]) }}"
                                        />
                                        <div class="flex flex-col gap-1">
                                            <div class="flex place-content-between items-center">
                                                <div class="font-medium">{{ $faker['users'][0]['name'] }}
                                                </div>
                                                <div class="text-xs opacity-70">{{ $faker['times'][0] }}</div>
                                            </div>
                                            <div class="line-clamp-2 text-xs opacity-70">
                                                {{ $faker['news'][0]['short_content'] }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </x-base.box>
                    </div>
                </div>
                <div class="group/profile relative size-9 flex-none">
                    <x-base.avatar
                        class="ring-(--color)/40 size-full [--color:var(--color-nav-foreground)]"
                        src="{{ Vite::asset($faker['photos'][0]) }}"
                    />
                    <div class="hidden group-hover/profile:block">
                        <x-base.box
                            class="before:shadow-foreground/5 absolute right-0 top-0 z-50 -mr-0.5 -mt-0.5 flex w-64 flex-col gap-2.5 px-6 py-5 before:rounded-2xl before:shadow-xl before:backdrop-blur after:rounded-2xl"
                        >
                            <div class="flex flex-col gap-0.5">
                                <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                <div class="mt-0.5 text-xs opacity-70">{{ $faker['jobs'][0] }}</div>
                            </div>
                            <div class="bg-foreground/5 h-px"></div>
                            <div class="flex flex-col gap-0.5">
                                <a
                                    class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5"
                                    href=""
                                >
                                    <x-base.lucide icon="Users" /> Profile
                                </a>
                                <a
                                    class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5"
                                    href=""
                                >
                                    <x-base.lucide icon="ShieldAlert" /> Add Account
                                </a>
                                <a
                                    class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5"
                                    href=""
                                >
                                    <x-base.lucide icon="FileLock" /> Reset Password
                                </a>
                                <a
                                    class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5"
                                    href=""
                                >
                                    <x-base.lucide icon="FileQuestion" /> Help
                                </a>
                            </div>
                            <div class="bg-foreground/5 h-px"></div>
                            <div class="flex flex-col gap-0.5">
                                <a
                                    class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5"
                                    href=""
                                >
                                    <x-base.lucide icon="Power" /> Logout
                                </a>
                            </div>
                        </x-base.box>
                    </div>
                </div>
                <!-- BEGIN: Quick Search Modal -->
                <x-base.dialog class="sm:max-w-2xl">
                    <div class="-mx-5 -mt-5">
                        <div class="relative border-b border-dashed">
                            <x-base.lucide
                                class="absolute inset-y-0 my-auto ml-4"
                                icon="Search"
                            />
                            <x-base.input
                                class="pr-19 h-14 w-full border-none bg-transparent pl-12 focus:ring-offset-transparent focus-visible:ring-transparent"
                                type="text"
                                placeholder="Quick search..."
                            />
                            <div
                                class="absolute inset-y-0 right-0 my-auto mr-4 flex h-6 items-center rounded-lg border px-2">
                                esc</div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2 px-5">
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
                                        <div class="truncate font-medium">
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                        <div class="hidden opacity-70 sm:block">
                                            {{ $faker['jobs'][0] }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="border-t border-dashed px-5 py-4">
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
                                            class="border-primary/10 bg-primary/10 text-primary flex size-8 items-center justify-center overflow-hidden rounded-lg border">
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
                                        <div class="truncate font-medium">
                                            {{ $faker['products'][0]['name'] }}
                                        </div>
                                        <div class="hidden opacity-70 sm:block">
                                            {{ $faker['products'][0]['category'] }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="border-t border-dashed px-5 py-4">
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
                                        <div class="truncate font-medium">
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
                <!-- END: Quick Search Modal -->
            </div>
        </div>
        <div class="mt-5 p-4">
            <div @class([
                'close-mobile-menu fixed ml-[275px] top-0 xl:hidden z-60 cursor-pointer text-background dark:text-foreground',
                '[&.close-mobile-menu--mobile-menu-open]:block',
                'hidden',
            ])>
                <div class="ml-5 mt-5 flex size-10 items-center justify-center">
                    <x-base.lucide
                        class="size-7 stroke-1"
                        icon="X"
                    />
                </div>
            </div>
            <ul @class([
                'top-menu transition-[margin] duration-200 w-[275px] xl:w-auto h-screen xl:h-auto z-50 xl:z-0 top-0 left-0 fixed xl:relative z-10 overflow-y-auto xl:overflow-y-visible',
                '-ml-[275px] [&.top-menu--mobile-menu-open]:ml-0 xl:ml-0',
                "before:content-[''] before:fixed before:hidden [&.top-menu--mobile-menu-open]:before:block before:inset-0 before:bg-black/80 dark:before:bg-foreground/5 before:backdrop-blur before:xl:hidden",
                "after:content-[''] after:transition-[margin] after:duration-200 after:-ml-[275px] [&.top-menu--mobile-menu-open]:after:ml-0 after:fixed after:w-[275px] after:inset-0 after:bg-primary after:xl:hidden dark:after:bg-background after:bg-noise",
            ])>
                @foreach ($mainMenu as $menuKey => $menu)
                    <li>
                        <a
                            href="{{ isset($menu['route_name']) ? route($menu['route_name'], isset($menu['params']) ? $menu['params'] : []) : 'javascript:;' }}"
                            @class([
                                $firstLevelActiveIndex == $menuKey
                                    ? 'top-menu__link top-menu__link--active'
                                    : 'top-menu__link',
                            ])
                        >
                            <div class="top-menu__link__icon">
                                <x-base.lucide icon="{{ $menu['icon'] }}" />
                            </div>
                            <div class="top-menu__link__title">
                                {{ $menu['title'] }}
                                @if (isset($menu['sub_menu']))
                                    <x-base.lucide
                                        class="top-menu__link__chevron"
                                        icon="ChevronDown"
                                    />
                                @endif
                            </div>
                        </a>
                        @if (isset($menu['sub_menu']))
                            <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'block' : 'hidden' }}">
                                @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                    <li>
                                        <a
                                            href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], isset($subMenu['params']) ? $subMenu['params'] : []) : 'javascript:;' }}"
                                            @class([
                                                $secondLevelActiveIndex == $subMenuKey
                                                    ? 'top-menu__link top-menu__link--active'
                                                    : 'top-menu__link',
                                            ])
                                        >
                                            <div class="top-menu__link__icon">
                                                <x-base.lucide icon="{{ $subMenu['icon'] }}" />
                                            </div>
                                            <div class="top-menu__link__title">
                                                {{ $subMenu['title'] }}
                                                @if (isset($subMenu['sub_menu']))
                                                    <x-base.lucide
                                                        class="top-menu__link__chevron"
                                                        icon="ChevronDown"
                                                    />
                                                @endif
                                            </div>
                                        </a>
                                        @if (isset($subMenu['sub_menu']))
                                            <ul class="{{ $secondLevelActiveIndex == $subMenuKey ? 'block' : 'hidden' }}">
                                                @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                    <li>
                                                        <a
                                                            href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], isset($lastSubMenu['params']) ? $lastSubMenu['params'] : []) : 'javascript:;' }}"
                                                            @class([
                                                                $thirdLevelActiveIndex == $lastSubMenuKey
                                                                    ? 'top-menu__link top-menu__link--active'
                                                                    : 'top-menu__link',
                                                            ])
                                                        >
                                                            <div class="top-menu__link__icon">
                                                                <x-base.lucide icon="{{ $lastSubMenu['icon'] }}" />
                                                            </div>
                                                            <div class="top-menu__link__title">
                                                                {{ $lastSubMenu['title'] }}
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            <div @class([
                'pt-8 pb-12 px-7 z-10 relative xl:mt-8',
                'before:absolute before:inset-0 before:opacity-[.07] before:bg-foreground before:rounded-4xl',
                'after:absolute after:inset-0 after:bg-[color-mix(in_oklch,_var(--color-background),_var(--color-foreground)_2%)] after:rounded-4xl after:border after:border-foreground/[.15] dark:after:opacity-[.59]',
            ])>
                <div class="relative z-20">
                    @yield('subcontent')
                </div>
            </div>
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/themes/enigma/top-menu.css')
    @vite('resources/css/vendors/simplebar.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/simplebar.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/themes/enigma.js')
@endPushOnce
