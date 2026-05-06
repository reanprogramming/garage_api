@extends('../themes/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div @class([
        'rubick',
        'min-h-screen dark:bg-background',
        'before:bg-primary dark:before:bg-foreground/[.01] before:fixed before:inset-0 before:bg-noise',
        'after:bg-accent after:bg-contain after:fixed after:inset-0 after:blur-xl dark:after:opacity-20',
    ])>
        <div @class([
            'side-menu text-background dark:text-foreground xl:ml-0 transition-[margin] duration-200 fixed top-0 left-0 z-50 group',
            "before:content-[''] before:fixed before:inset-0 before:bg-black/80 dark:before:bg-foreground/5 before:backdrop-blur before:xl:hidden",
            "after:content-[''] after:absolute after:inset-0 after:bg-primary after:xl:hidden dark:after:bg-background after:bg-noise",
            '[&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:before:block',
            '-ml-[275px] before:hidden',
        ])>
            <div @class([
                'close-mobile-menu fixed ml-[275px] xl:hidden z-50 cursor-pointer',
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
            <div @class([
                'side-menu__content',
                'z-20 pt-5 pb-[7.5rem] relative w-[275px] duration-200 transition-[width] group-[.side-menu--collapsed]:xl:w-[110px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col',
            ])>
                <div
                    class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-6 duration-200 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[110px]">
                    <a
                        class="flex items-center transition-[margin] duration-200 xl:ml-2 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-2 group-[.side-menu--collapsed]:xl:ml-6"
                        href=""
                    >
                        <img
                            class="size-5"
                            src="{{ Vite::asset('resources/images/logo.svg') }}"
                        />
                        <div
                            class="ml-3.5 text-nowrap transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                            <span class="text-base font-medium">Midone</span>
                            <span class="text-base font-light">Rubick</span>
                        </div>
                    </a>
                    <a
                        class="toggle-compact-menu border-background/20 bg-background/10 dark:bg-foreground/[.02] dark:border-foreground/[.09] ml-auto hidden items-center justify-center rounded-md border py-0.5 pl-0.5 pr-1 opacity-70 transition-[opacity,transform] hover:opacity-100 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 2xl:flex"
                        href=""
                    >
                        <x-base.lucide icon="ChevronLeft" />
                    </a>
                </div>
                <div @class([
                    'w-full h-full z-20 px-4 overflow-y-auto overflow-x-hidden pb-3 [&:-webkit-scrollbar]:w-0 scroll-smooth',
                    '[&_.simplebar-scrollbar]:before:!bg-background/70',
                    '[-webkit-mask-image:_linear-gradient(to_top,_rgba(0,_0,_0,_0),_black_30px),_linear-gradient(to_bottom,_rgba(0,_0,_0,_0),_black_30px)]',
                    '[-webkit-mask-composite:_destination-in]',
                ])>
                    <ul class="scrollable">
                        @foreach ($mainMenu as $menuKey => $menu)
                            <!-- BEGIN: First Child -->
                            @if (is_string($menu))
                                <li class="side-menu__group-label">
                                    {{ $menu }}
                                </li>
                            @else
                                <li>
                                    <a
                                        href="{{ isset($menu['route_name']) && Route::has($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                                        @class([
                                            'side-menu__link',
                                            $firstLevelActiveIndex == $menuKey ? 'side-menu__link--active' : '',
                                        ])
                                    >
                                        <x-base.lucide
                                            class="side-menu__link__icon"
                                            :icon="$menu['icon']"
                                        />
                                        <div class="side-menu__link__title">{{ $menu['title'] }}</div>
                                        @if (isset($menu['badge']))
                                            <div class="side-menu__link__badge">
                                                {{ $menu['badge'] }}
                                            </div>
                                        @endif
                                        @if (isset($menu['sub_menu']))
                                            <x-base.lucide
                                                class="side-menu__link__chevron transition"
                                                icon="ChevronDown"
                                            />
                                        @endif
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    @if (isset($menu['sub_menu']))
                                        <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'block' : 'hidden' }}">
                                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                                <li>
                                                    <a
                                                        href="{{ isset($subMenu['route_name']) && Route::has($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                                        @class([
                                                            'side-menu__link',
                                                            $secondLevelActiveIndex == $subMenuKey ? 'side-menu__link--active' : '',
                                                        ])
                                                    >
                                                        <x-base.lucide
                                                            class="side-menu__link__icon"
                                                            :icon="$subMenu['icon']"
                                                        />
                                                        <div class="side-menu__link__title">
                                                            {{ $subMenu['title'] }}
                                                        </div>
                                                        @if (isset($subMenu['badge']))
                                                            <div class="side-menu__link__badge">
                                                                {{ $subMenu['badge'] }}
                                                            </div>
                                                        @endif
                                                        @if (isset($subMenu['sub_menu']))
                                                            <x-base.lucide
                                                                class="side-menu__link__chevron transition"
                                                                icon="ChevronDown"
                                                            />
                                                        @endif
                                                    </a>
                                                    <!-- BEGIN: Third Child -->
                                                    @if (isset($subMenu['sub_menu']))
                                                        <ul
                                                            class="{{ $secondLevelActiveIndex == $subMenuKey ? 'block' : 'hidden' }}">
                                                            @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                                <li>
                                                                    <a
                                                                        href="{{ isset($lastSubMenu['route_name']) && Route::has($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                                        @class([
                                                                            'side-menu__link',
                                                                            $thirdLevelActiveIndex == $lastSubMenuKey ? 'side-menu__link--active' : '',
                                                                        ])
                                                                    >
                                                                        <x-base.lucide
                                                                            class="side-menu__link__icon"
                                                                            :icon="$lastSubMenu['icon']"
                                                                        />
                                                                        <div class="side-menu__link__title">
                                                                            {{ $lastSubMenu['title'] }}
                                                                        </div>
                                                                        @if (isset($lastSubMenu['badge']))
                                                                            <div class="side-menu__link__badge">
                                                                                {{ $lastSubMenu['title'] }}
                                                                            </div>
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <!-- END: Third Child -->
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <!-- END: Second Child -->
                                </li>
                            @endif
                            <!-- END: First Child -->
                        @endforeach
                    </ul>
                </div>
                <div
                    class="side-menu__account group/profile absolute inset-x-0 bottom-0 mx-4 mb-8 transition-[width] group-[.side-menu--collapsed.side-menu--on-hover]:block group-[.side-menu--collapsed]:justify-center xl:group-[.side-menu--collapsed]:flex">
                    <div
                        class="bg-background/10 border-background/20 dark:bg-foreground/[.02] dark:border-foreground/[.09] flex cursor-pointer items-center rounded-full border p-2.5 opacity-80 backdrop-blur-2xl transition hover:opacity-100">
                        <div
                            class="border-background/20 dark:border-foreground/20 relative h-10 w-10 flex-none overflow-hidden rounded-full border-4">
                            <img
                                class="absolute top-0 h-full w-full object-cover"
                                src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                alt="Midone - Admin Dashboard Template"
                            >
                        </div>
                        <div
                            class="ms-3 flex w-full items-center overflow-hidden transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:ms-3 group-[.side-menu--collapsed.side-menu--on-hover]:w-full group-[.side-menu--collapsed.side-menu--on-hover]:opacity-100 xl:group-[.side-menu--collapsed]:ms-0 xl:group-[.side-menu--collapsed]:w-0 xl:group-[.side-menu--collapsed]:opacity-0">
                            <div class="w-28">
                                <div class="w-full truncate font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                                <div class="w-full truncate text-xs opacity-60">Administrator</div>
                            </div>
                            <x-base.lucide
                                class="me-4 ms-auto opacity-50"
                                icon="MoveRight"
                            />
                        </div>
                    </div>
                    <div class="hidden group-hover/profile:block">
                        <x-base.box
                            class="text-foreground before:shadow-foreground/5 absolute bottom-0 left-[100%] z-50 ml-2 flex w-64 flex-col gap-2.5 px-6 py-5 before:rounded-2xl before:shadow-xl before:backdrop-blur after:rounded-2xl"
                        >
                            <div class="flex flex-col gap-0.5">
                                <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                                <div class="mt-0.5 text-xs opacity-70">{{ $fakers[0]['jobs'][0] }}</div>
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
            </div>
        </div>
        <div @class([
            'content h-screen transition-[margin,width] duration-200 pt-8 pb-12 px-7 z-10 relative',
            'before:absolute before:inset-y-4 before:-ml-px before:right-4 before:opacity-[.07] before:left-4 xl:before:left-0 before:bg-foreground before:rounded-4xl',
            'after:absolute after:inset-y-4 after:-ml-px after:right-4 after:left-4 xl:after:left-0 after:bg-[color-mix(in_oklch,_var(--color-background),_var(--color-foreground)_2%)] after:rounded-4xl after:border after:border-foreground/[.15] dark:after:opacity-[.59]',
            'xl:ml-[275px]',
            '[&.content--compact]:xl:ml-[110px]',
        ])>
            <div class="h-full overflow-x-hidden">
                <div
                    class="content__scroll-area relative z-20 -mr-7 h-full overflow-y-auto pl-4 pr-11 transition-[margin] duration-200 xl:pl-0">
                    <div
                        class="top-bar group -mt-2 [&.scrolled]:sticky [&.scrolled]:inset-x-0 [&.scrolled]:top-0 [&.scrolled]:z-[999] [&.scrolled]:mt-0">
                        <div @class([
                            'flex h-16 items-center gap-5 border-b transition-all',
                            'group-[.scrolled]:px-5 group-[.scrolled]:rounded-2xl group-[.scrolled]:bg-background group-[.scrolled]:border group-[.scrolled]:shadow-lg group-[.scrolled]:shadow-foreground/5',
                        ])>
                            <div
                                class="open-mobile-menu bg-background mr-auto flex size-9 cursor-pointer items-center justify-center rounded-xl border xl:hidden">
                                <x-base.lucide
                                    class="rotate-90"
                                    icon="ChartNoAxesColumn"
                                />
                            </div>
                            <x-base.breadcrumb
                                class="mr-auto hidden xl:flex"
                                :items="['Apps', 'Dashboards', 'Overview']"
                            />
                            <div
                                class="quick-search-toggle bg-background hover:ring-foreground/5 flex h-9 cursor-pointer items-center rounded-full border px-4 ring-1 ring-transparent ring-offset-2 ring-offset-transparent">
                                <div class="flex items-center gap-3 opacity-70">
                                    <x-base.lucide icon="Search" />
                                    ⌘K
                                </div>
                            </div>
                            <div class="group/notifications relative flex h-9 items-center">
                                <x-base.lucide icon="Bell" />
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
                                    class="size-full"
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
                        </div>
                        <!-- BEGIN: Quick Search Modal -->
                        <x-quick-search-dialog />
                        <!-- END: Quick Search Modal -->
                    </div>
                    @yield('subcontent')
                </div>
            </div>
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/themes/rubick/side-menu.css')
    @vite('resources/css/vendors/simplebar.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/simplebar.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/themes/rubick.js')
@endPushOnce
