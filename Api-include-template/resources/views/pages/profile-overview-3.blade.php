@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Profile Layout</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 flex flex-col-reverse lg:col-span-4 lg:block 2xl:col-span-3">
            <x-base.box class="mt-5 p-0 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <x-base.avatar
                        class="size-12"
                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                    />
                    <div class="ml-4 mr-auto">
                        <div class="text-base font-medium">
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="opacity-70">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <x-base.dropdown-menu>
                        <x-base.dropdown-menu.trigger
                            class="block size-5"
                            href="#"
                            as="a"
                        >
                            <x-base.lucide
                                class="size-5 opacity-70"
                                icon="MoreHorizontal"
                            />
                        </x-base.dropdown-menu.trigger>
                        <x-base.dropdown-menu.content class="w-56">
                            <x-base.dropdown-menu.item class="py-3 font-medium">Export Options</x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.separator />
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Activity"
                                />
                                English
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Box"
                                />
                                Indonesia
                                <x-base.badge class="ml-auto [--color:var(--color-danger)]">10</x-base.badge>
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Layout"
                                />
                                English
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Sidebar"
                                />
                                Indonesia
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.separator />
                            <div class="flex px-2 py-1.5">
                                <x-base.button
                                    class="text-xs"
                                    type="button"
                                    variant="primary"
                                    size="sm"
                                >
                                    Settings
                                </x-base.button>
                                <x-base.button
                                    class="ml-auto text-xs"
                                    type="button"
                                    variant="secondary"
                                    size="sm"
                                >
                                    View Profile
                                </x-base.button>
                            </div>
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </div>
                <div class="flex flex-col gap-5 border-t p-5">
                    <a
                        class="[&.active]:text-primary active flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Activity"
                        /> Personal
                        Information
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Box"
                        /> Account Settings
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Lock"
                        /> Change Password
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Settings"
                        /> User
                        Settings
                    </a>
                </div>
                <div class="flex flex-col gap-5 border-t p-5">
                    <a
                        class="flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Activity"
                        /> Email
                        Settings
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Box"
                        /> Saved Credit
                        Cards
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Lock"
                        /> Social Networks
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Settings"
                        /> Tax
                        Information
                    </a>
                </div>
                <div class="flex border-t p-5">
                    <x-base.button type="button">
                        New Group
                    </x-base.button>
                    <x-base.button
                        class="ml-auto"
                        type="button"
                    >
                        New Quick Link
                    </x-base.button>
                </div>
            </x-base.box>
            <x-base.box
                class="text-(--color) before:bg-(--color)/5 before:border-(--color)/20 after:bg-(--color)/5 after:border-(--color)/20 mt-8 [--color:var(--color-warning)]"
            >
                <div class="flex items-center">
                    <div class="text-lg font-medium">Latest Updates</div>
                    <x-base.badge class="ml-auto [--color:var(--color-warning)]">New</x-base.badge>
                </div>
                <div class="mt-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s.
                </div>
                <div class="mt-5 flex font-medium">
                    <x-base.button
                        class="w-28 bg-transparent"
                        type="button"
                        variant="warning"
                    >
                        Take Action
                    </x-base.button>
                    <x-base.button
                        class="ml-auto w-28 bg-transparent"
                        type="button"
                        variant="warning"
                    >
                        Dismiss
                    </x-base.button>
                </div>
            </x-base.box>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-x-6 gap-y-8">
                <!-- BEGIN: Daily Sales -->
                <x-base.box class="col-span-12 p-0 2xl:col-span-6">
                    <div class="flex items-center border-b px-5 py-5 sm:py-3">
                        <h2 class="mr-auto text-base font-medium">Daily Sales</h2>
                        <x-base.dropdown-menu class="ml-auto sm:hidden">
                            <x-base.dropdown-menu.trigger
                                class="block size-5"
                                href="#"
                                as="a"
                            >
                                <x-base.lucide
                                    class="size-5 opacity-70"
                                    icon="MoreHorizontal"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-40">
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="File"
                                    /> Download
                                    Excel
                                </x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                        <x-base.button class="hidden sm:flex">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="File"
                            /> Download
                            Excel
                        </x-base.button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <x-base.avatar
                                class="size-12"
                                src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                            />
                            <div class="ml-4 mr-auto">
                                <a
                                    class="font-medium"
                                    href=""
                                >
                                    {{ $fakers[0]['users'][0]['name'] }}
                                </a>
                                <div class="mr-5 opacity-70 sm:mr-5">
                                    Bootstrap 4 HTML Admin Template
                                </div>
                            </div>
                            <div class="font-medium">
                                +$19
                            </div>
                        </div>
                        <div class="relative mt-5 flex items-center">
                            <x-base.avatar
                                class="size-12"
                                src="{{ Vite::asset($fakers[1]['photos'][0]) }}"
                            />
                            <div class="ml-4 mr-auto">
                                <a
                                    class="font-medium"
                                    href=""
                                >
                                    {{ $fakers[1]['users'][0]['name'] }}
                                </a>
                                <div class="mr-5 opacity-70 sm:mr-5">
                                    Tailwind Admin Dashboard Template
                                </div>
                            </div>
                            <div class="font-medium">
                                +$25
                            </div>
                        </div>
                        <div class="relative mt-5 flex items-center">
                            <x-base.avatar
                                class="size-12"
                                src="{{ Vite::asset($fakers[2]['photos'][0]) }}"
                            />
                            <div class="ml-4 mr-auto">
                                <a
                                    class="font-medium"
                                    href=""
                                >
                                    {{ $fakers[2]['users'][0]['name'] }}
                                </a>
                                <div class="mr-5 opacity-70 sm:mr-5">
                                    Vuejs HTML Admin Template
                                </div>
                            </div>
                            <div class="font-medium">
                                +$21
                            </div>
                        </div>
                    </div>
                </x-base.box>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Announcement -->
                <x-base.box class="col-span-12 p-0 2xl:col-span-6">
                    <div class="flex items-center border-b px-5 py-3">
                        <h2 class="mr-auto text-base font-medium">Announcement</h2>
                        <x-base.button class="mr-2">
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronLeft"
                            />
                        </x-base.button>
                        <x-base.button>
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronRight"
                            />
                        </x-base.button>
                    </div>
                    <div class="px-5">
                        <x-base.tiny-slider class="py-5">
                            <div class="px-5">
                                <div class="text-lg font-medium">
                                    Midone Admin Template
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever. <br />
                                    <br />
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry since the 1500s.
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 text-(--color) mr-3 rounded-xl border px-3 py-2 font-medium [--color:var(--color-primary)]">
                                        02 June 2045
                                    </div>
                                    <x-base.button class="ml-auto">
                                        View Details
                                    </x-base.button>
                                </div>
                            </div>
                            <div class="px-5">
                                <div class="text-lg font-medium">
                                    Midone Admin Template
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever. <br />
                                    <br />
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry since the 1500s.
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 text-(--color) mr-3 rounded-xl border px-3 py-2 font-medium [--color:var(--color-primary)]">
                                        02 June 2045
                                    </div>
                                    <x-base.button class="ml-auto">
                                        View Details
                                    </x-base.button>
                                </div>
                            </div>
                            <div class="px-5">
                                <div class="text-lg font-medium">
                                    Midone Admin Template
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever. <br />
                                    <br />
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry since the 1500s.
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 text-(--color) mr-3 rounded-xl border px-3 py-2 font-medium [--color:var(--color-primary)]">
                                        02 June 2045
                                    </div>
                                    <x-base.button class="ml-auto">
                                        View Details
                                    </x-base.button>
                                </div>
                            </div>
                        </x-base.tiny-slider>
                    </div>
                </x-base.box>
                <!-- END: Announcement -->
                <!-- BEGIN: Projects -->
                <x-base.box class="col-span-12 p-0 2xl:col-span-6">
                    <div class="flex items-center border-b px-5 py-3">
                        <h2 class="mr-auto text-base font-medium">Projects</h2>
                        <x-base.button class="mr-2">
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronLeft"
                            />
                        </x-base.button>
                        <x-base.button>
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronRight"
                            />
                        </x-base.button>
                    </div>
                    <div class="px-5">
                        <x-base.tiny-slider class="py-5">
                            <div class="px-5">
                                <div class="text-lg font-medium">
                                    Midone Admin Template
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.
                                </div>
                                <div class="mt-5">
                                    <div class="flex opacity-70">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:50%]" />
                                </div>
                            </div>
                            <div class="px-5">
                                <div class="text-lg font-medium">
                                    Midone Admin Template
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.
                                </div>
                                <div class="mt-5">
                                    <div class="flex opacity-70">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:50%]" />
                                </div>
                            </div>
                            <div class="px-5">
                                <div class="text-lg font-medium">
                                    Midone Admin Template
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.
                                </div>
                                <div class="mt-5">
                                    <div class="flex opacity-70">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:50%]" />
                                </div>
                            </div>
                        </x-base.tiny-slider>
                    </div>
                </x-base.box>
                <!-- END: Projects -->
                <!-- BEGIN: Today Schedules -->
                <x-base.box class="col-span-12 p-0 2xl:col-span-6">
                    <div class="flex items-center border-b px-5 py-3">
                        <h2 class="mr-auto text-base font-medium">
                            Today Schedules
                        </h2>
                        <x-base.button class="mr-2">
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronLeft"
                            />
                        </x-base.button>
                        <x-base.button>
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronRight"
                            />
                        </x-base.button>
                    </div>
                    <div class="px-5">
                        <x-base.tiny-slider class="py-5">
                            <div class="px-5 text-center sm:text-left">
                                <div class="text-lg font-medium">
                                    Developing rest API with Laravel 7
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry
                                </div>
                                <div class="mt-2">11:15AM - 12:30PM</div>
                                <div class="mt-5 flex flex-col items-center sm:flex-row">
                                    <div class="flex items-center opacity-70">
                                        <x-base.lucide
                                            class="mr-2 hidden size-4 sm:block"
                                            icon="MapPin"
                                        />
                                        1396 Pooh Bear Lane, New Market
                                    </div>
                                    <x-base.button class="mt-3 sm:ml-auto sm:mt-0">
                                        View On Map
                                    </x-base.button>
                                </div>
                            </div>
                            <div class="px-5 text-center sm:text-left">
                                <div class="text-lg font-medium">
                                    Developing rest API with Laravel 7
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry
                                </div>
                                <div class="mt-2">11:15AM - 12:30PM</div>
                                <div class="mt-5 flex flex-col items-center sm:flex-row">
                                    <div class="flex items-center opacity-70">
                                        <x-base.lucide
                                            class="mr-2 hidden size-4 sm:block"
                                            icon="MapPin"
                                        />
                                        1396 Pooh Bear Lane, New Market
                                    </div>
                                    <x-base.button class="mt-3 sm:ml-auto sm:mt-0">
                                        View On Map
                                    </x-base.button>
                                </div>
                            </div>
                            <div class="px-5 text-center sm:text-left">
                                <div class="text-lg font-medium">
                                    Developing rest API with Laravel 7
                                </div>
                                <div class="mt-2 opacity-70">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry
                                </div>
                                <div class="mt-2">11:15AM - 12:30PM</div>
                                <div class="mt-5 flex flex-col items-center sm:flex-row">
                                    <div class="flex items-center opacity-70">
                                        <x-base.lucide
                                            class="mr-2 hidden size-4 sm:block"
                                            icon="MapPin"
                                        />
                                        1396 Pooh Bear Lane, New Market
                                    </div>
                                    <x-base.button class="mt-3 sm:ml-auto sm:mt-0">
                                        View On Map
                                    </x-base.button>
                                </div>
                            </div>
                        </x-base.tiny-slider>
                    </div>
                </x-base.box>
                <!-- END: Today Schedules -->
                <!-- BEGIN: Top Products -->
                <x-base.box class="col-span-12 p-0 2xl:col-span-6">
                    <div class="flex items-center border-b p-5">
                        <h2 class="mr-auto text-base font-medium">Top Products</h2>
                        <x-base.dropdown-menu class="ml-auto">
                            <x-base.dropdown-menu.trigger
                                class="block size-5"
                                href="#"
                                as="a"
                            >
                                <x-base.lucide
                                    class="size-5 opacity-70"
                                    icon="MoreHorizontal"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-40">
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Edit"
                                    /> New Chat
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Trash"
                                    /> Delete
                                </x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                    </div>
                    <div class="p-5">
                        <x-base.tabs>
                            <x-base.tabs.list>
                                <x-base.tabs.trigger>
                                    <x-base.lucide
                                        class="mr-2"
                                        icon="Box"
                                    />
                                    Laravel
                                </x-base.tabs.trigger>
                                <x-base.tabs.trigger>
                                    <x-base.lucide
                                        class="mr-2"
                                        icon="Inbox"
                                    />
                                    Symfony
                                </x-base.tabs.trigger>
                                <x-base.tabs.trigger>
                                    <x-base.lucide
                                        class="mr-2"
                                        icon="Activity"
                                    />
                                    Bootstrap
                                </x-base.tabs.trigger>
                            </x-base.tabs.list>
                            <x-base.tabs.contents>
                                <x-base.tabs.content class="mt-8">
                                    <div class="flex flex-col items-center sm:flex-row">
                                        <div class="mr-auto">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                Wordpress Template
                                            </a>
                                            <div class="mt-1 opacity-70">
                                                HTML, PHP, Mysql
                                            </div>
                                        </div>
                                        <div class="mt-3 flex w-full items-center sm:mt-0 sm:w-auto">
                                            <x-base.badge class="mr-5 [--color:var(--color-warning)]">+20%</x-base.badge>
                                            <x-base.progress class="[--value:50%] sm:w-40" />
                                        </div>
                                    </div>
                                    <div class="mt-5 flex flex-col items-center sm:flex-row">
                                        <div class="mr-auto">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                Laravel Template
                                            </a>
                                            <div class="mt-1 opacity-70">PHP, Mysql</div>
                                        </div>
                                        <div class="mt-3 flex w-full items-center sm:mt-0 sm:w-auto">
                                            <x-base.badge class="mr-5 [--color:var(--color-warning)]">+55%</x-base.badge>
                                            <x-base.progress class="[--value:50%] sm:w-40" />
                                        </div>
                                    </div>
                                    <div class="mt-5 flex flex-col items-center sm:flex-row">
                                        <div class="mr-auto">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                Tailwind HTML Template
                                            </a>
                                            <div class="mt-1 opacity-70">HTML, CSS, JS</div>
                                        </div>
                                        <div class="mt-3 flex w-full items-center sm:mt-0 sm:w-auto">
                                            <x-base.badge class="mr-5 [--color:var(--color-warning)]">+40%</x-base.badge>
                                            <x-base.progress class="[--value:50%] sm:w-40" />
                                        </div>
                                    </div>
                                </x-base.tabs.content>
                            </x-base.tabs.contents>
                        </x-base.tabs>
                    </div>
                </x-base.box>
                <!-- END: Top Products -->
                <!-- BEGIN: Work In Progress -->
                <x-base.box class="col-span-12 p-0 lg:col-span-6">
                    <x-base.tabs>
                        <div class="relative flex items-center border-b p-5">
                            <h2 class="mr-auto text-base font-medium">
                                Work In Progress
                            </h2>
                            <x-base.dropdown-menu class="ml-auto sm:hidden">
                                <x-base.dropdown-menu.trigger
                                    class="block size-5"
                                    href="#"
                                    as="a"
                                >
                                    <x-base.lucide
                                        class="size-5 opacity-70"
                                        icon="MoreHorizontal"
                                    />
                                </x-base.dropdown-menu.trigger>
                                <x-base.dropdown-menu.content class="w-40">
                                    <x-base.dropdown-menu.item
                                        class="w-full"
                                        as="x-base.tabs.trigger"
                                    >
                                        New
                                    </x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item
                                        class="w-full"
                                        as="x-base.tabs.trigger"
                                    >
                                        Last Week
                                    </x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                            <x-base.tabs.list class="absolute inset-y-0 right-5 my-auto hidden w-auto sm:flex">
                                <x-base.tabs.trigger>New</x-base.tabs.trigger>
                                <x-base.tabs.trigger>Last Week</x-base.tabs.trigger>
                            </x-base.tabs.list>
                        </div>
                        <x-base.tabs.contents class="p-5">
                            <x-base.tabs.content>
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:50%]" />
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:25%]" />
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:75%]" />
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Review</div>
                                        <div>42</div>
                                    </div>
                                    <x-base.progress class="mt-2 [--value:75%]" />
                                </div>
                                <div class="text-center">
                                    <x-base.button
                                        class="mx-auto mt-5 inline-block"
                                        href=""
                                        as="a"
                                    >
                                        View More Details
                                    </x-base.button>
                                </div>
                            </x-base.tabs.content>
                        </x-base.tabs.contents>
                    </x-base.tabs>
                </x-base.box>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Latest Tasks -->
                <x-base.box class="col-span-12 p-0 lg:col-span-6">
                    <x-base.tabs>
                        <div class="relative flex items-center border-b p-5">
                            <h2 class="mr-auto text-base font-medium">
                                Latest Tasks
                            </h2>
                            <x-base.dropdown-menu class="ml-auto sm:hidden">
                                <x-base.dropdown-menu.trigger
                                    class="block size-5"
                                    href="#"
                                    as="a"
                                >
                                    <x-base.lucide
                                        class="size-5 opacity-70"
                                        icon="MoreHorizontal"
                                    />
                                </x-base.dropdown-menu.trigger>
                                <x-base.dropdown-menu.content class="w-40">
                                    <x-base.dropdown-menu.item
                                        class="w-full"
                                        as="x-base.tabs.trigger"
                                    >
                                        New
                                    </x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item
                                        class="w-full"
                                        as="x-base.tabs.trigger"
                                    >
                                        Last Week
                                    </x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                            <x-base.tabs.list class="absolute inset-y-0 right-5 my-auto hidden w-auto sm:flex">
                                <x-base.tabs.trigger>New</x-base.tabs.trigger>
                                <x-base.tabs.trigger>Last Week</x-base.tabs.trigger>
                            </x-base.tabs.list>
                        </div>
                        <x-base.tabs.contents class="p-5">
                            <x-base.tabs.content>
                                <div class="flex items-center">
                                    <div class="border-primary/20 border-l-4 pl-4">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Create New Campaign
                                        </a>
                                        <div class="opacity-70">10:00 AM</div>
                                    </div>
                                    <div class="ml-auto">
                                        <x-base.switch type="checkbox" />
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-primary/20 border-l-4 pl-4">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Meeting With Client
                                        </a>
                                        <div class="opacity-70">02:00 PM</div>
                                    </div>
                                    <div class="ml-auto">
                                        <x-base.switch type="checkbox" />
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-primary/20 border-l-4 pl-4">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Create New Repository
                                        </a>
                                        <div class="opacity-70">04:00 PM</div>
                                    </div>
                                    <div class="ml-auto">
                                        <x-base.switch type="checkbox" />
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-primary/20 border-l-4 pl-4">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Meeting With Client
                                        </a>
                                        <div class="opacity-70">02:00 PM</div>
                                    </div>
                                    <div class="ml-auto">
                                        <x-base.switch type="checkbox" />
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-primary/20 border-l-4 pl-4">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Create New Repository
                                        </a>
                                        <div class="opacity-70">04:00 PM</div>
                                    </div>
                                    <div class="ml-auto">
                                        <x-base.switch type="checkbox" />
                                    </div>
                                </div>
                            </x-base.tabs.content>
                        </x-base.tabs.contents>
                    </x-base.tabs>
                </x-base.box>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistics -->
                <x-base.box class="col-span-12 p-0 2xl:col-span-6">
                    <div class="flex items-center border-b px-5 py-5 sm:py-3">
                        <h2 class="mr-auto text-base font-medium">
                            General Statistics
                        </h2>
                        <x-base.dropdown-menu class="ml-auto">
                            <x-base.dropdown-menu.trigger
                                class="block size-5 sm:hidden"
                                href="#"
                                as="a"
                            >
                                <x-base.lucide
                                    class="size-5 opacity-70"
                                    icon="MoreHorizontal"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.trigger
                                class="hidden font-normal sm:flex"
                                as="x-base.button"
                            >
                                Export
                                <x-base.lucide
                                    class="ml-2 size-4"
                                    icon="ChevronDown"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-40">
                                <x-base.dropdown-menu.item class="py-3 font-medium">Export
                                    Tools</x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.separator />
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Printer"
                                    />
                                    Print
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="ExternalLink"
                                    />
                                    Excel
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="FileText"
                                    />
                                    CSV
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Archive"
                                    />
                                    PDF
                                </x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col items-center sm:flex-row">
                            <div class="mr-auto flex flex-wrap sm:flex-nowrap">
                                <div class="mb-1 mr-5 flex items-center sm:mb-0">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-pending)]">
                                    </div>
                                    <span>Author Sales</span>
                                </div>
                                <div class="mb-1 mr-5 flex items-center sm:mb-0">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                    </div>
                                    <span>Product Profit</span>
                                </div>
                            </div>
                            <x-base.dropdown-menu class="mr-auto mt-3 sm:mr-0 sm:mt-0">
                                <x-base.dropdown-menu.trigger
                                    class="font-normal"
                                    as="x-base.button"
                                >
                                    Filter by Month
                                    <x-base.lucide
                                        class="ml-2 size-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.dropdown-menu.trigger>
                                <x-base.dropdown-menu.content class="h-32 w-40 overflow-y-auto">
                                    <x-base.dropdown-menu.item>January</x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item>February</x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item>March</x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item>June</x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item>July</x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                        </div>
                        <div @class([
                            'mt-8 relative',
                            'before:content-[\'\'] before:block before:absolute before:w-16 before:start-0 before:top-0 before:bottom-0 before:ms-11 before:mb-7 before:bg-gradient-to-r before:from-background before:via-background/80 before:to-transparent',
                            'after:content-[\'\'] after:block after:absolute after:w-16 after:end-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-background after:via-background/80 after:to-transparent',
                        ])>
                            <x-report-line-chart height="h-[212px]" />
                        </div>
                    </div>
                </x-base.box>
                <!-- END: General Statistics -->
            </div>
        </div>
    </div>
@endsection
