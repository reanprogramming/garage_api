@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8">
        <h2 class="mr-auto text-lg font-medium">Profile Layout</h2>
    </div>
    <x-base.tabs>
        <!-- BEGIN: Profile Info -->
        <x-base.box class="p-0 mt-5">
            <div class="flex flex-col p-5 border-b lg:flex-row">
                <div class="flex items-center justify-center flex-1 px-5 lg:justify-start">
                    <div class="relative">
                        <x-base.avatar
                            class="border-5 size-20 sm:size-24 lg:size-32"
                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                        <div
                            class="bg-(--color)/70 border-3 border-background absolute bottom-0 right-0 mb-1 mr-1 flex items-center justify-center rounded-full p-2 text-white [--color:var(--color-primary)]">
                            <x-base.lucide
                                class="size-4"
                                icon="Camera"
                            />
                        </div>
                    </div>
                    <div class="ml-5">
                        <div class="w-24 text-lg font-medium truncate sm:w-40 sm:whitespace-normal">
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="opacity-70">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                </div>
                <div class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r lg:mt-0 lg:border-t-0 lg:pt-0">
                    <div class="font-medium text-center lg:mt-3 lg:text-left">
                        Contact Details
                    </div>
                    <div class="flex flex-col items-center justify-center mt-4 lg:items-start">
                        <div class="flex items-center truncate sm:whitespace-normal">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Mail"
                            />
                            {{ $fakers[0]['users'][0]['email'] }}
                        </div>
                        <div class="flex items-center mt-3 truncate sm:whitespace-normal">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Instagram"
                            /> Instagram
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="flex items-center mt-3 truncate sm:whitespace-normal">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Twitter"
                            /> Twitter
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-5 pt-5 mt-6 border-t lg:mt-0 lg:border-0 lg:pt-0">
                    <div class="font-medium text-center lg:mt-5 lg:text-left">
                        Sales Growth
                    </div>
                    <div class="flex items-center justify-center mt-2 lg:justify-start">
                        <div class="flex w-20 mr-2">
                            USP:
                            <x-base.badge class="ml-3 [--color:var(--color-success)]">+23%</x-base.badge>
                        </div>
                        <div class="w-3/4 ml-5">
                            <x-simple-line-chart-1 height="h-[55px]" />
                        </div>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="flex w-20 mr-2">
                            STP:
                            <x-base.badge class="ml-3 [--color:var(--color-danger)]">-2%</x-base.badge>
                        </div>
                        <div class="w-3/4 ml-5">
                            <x-simple-line-chart-2 height="h-[55px]" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-5 py-4">
                <x-base.tabs.list class="mb-0">
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Airplay"
                        /> Dashboard
                    </x-base.tabs.trigger>
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Aperture"
                        /> Account & Profile
                    </x-base.tabs.trigger>
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="PackageCheck"
                        /> Activities
                    </x-base.tabs.trigger>
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Palette"
                        /> Tasks
                    </x-base.tabs.trigger>
                </x-base.tabs.list>
            </div>
        </x-base.box>
        <!-- END: Profile Info -->
        <x-base.tabs.contents>
            <x-base.tabs.content class="mt-8">
                <div class="grid grid-cols-12 gap-x-6 gap-y-8">
                    <!-- BEGIN: Top Categories -->
                    <x-base.box class="col-span-12 p-0 lg:col-span-6">
                        <div class="flex items-center p-5 border-b">
                            <h2 class="mr-auto text-base font-medium">
                                Top Categories
                            </h2>
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
                                            icon="Plus"
                                        /> Add
                                        Category
                                    </x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item>
                                        <x-base.lucide
                                            class="mr-2 size-4"
                                            icon="Settings"
                                        />
                                        Settings
                                    </x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                        </div>
                        <div class="p-5">
                            <div class="flex flex-col sm:flex-row">
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
                                <div class="flex">
                                    <div class="w-32 mt-5 mr-auto -ml-2 sm:ml-0 sm:mr-5">
                                        <x-simple-line-chart height="h-[30px]" />
                                    </div>
                                    <div class="text-center">
                                        <div class="font-medium">6.5k</div>
                                        <x-base.badge class="mt-1.5 [--color:var(--color-primary)]">+150</x-base.badge>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col mt-5 sm:flex-row">
                                <div class="mr-auto">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Bootstrap HTML Template
                                    </a>
                                    <div class="mt-1 opacity-70">
                                        HTML, PHP, Mysql
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-32 mt-5 mr-auto -ml-2 sm:ml-0 sm:mr-5">
                                        <x-simple-line-chart height="h-[30px]" />
                                    </div>
                                    <div class="text-center">
                                        <div class="font-medium">2.5k</div>
                                        <x-base.badge class="mt-1.5 [--color:var(--color-pending)]">+150</x-base.badge>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col mt-5 sm:flex-row">
                                <div class="mr-auto">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Tailwind HTML Template
                                    </a>
                                    <div class="mt-1 opacity-70">
                                        HTML, PHP, Mysql
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-32 mt-5 mr-auto -ml-2 sm:ml-0 sm:mr-5">
                                        <x-simple-line-chart height="h-[30px]" />
                                    </div>
                                    <div class="text-center">
                                        <div class="font-medium">3.4k</div>
                                        <x-base.badge class="mt-1.5 [--color:var(--color-success)]">+150</x-base.badge>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-base.box>
                    <!-- END: Top Categories -->
                    <!-- BEGIN: Work In Progress -->
                    <x-base.box class="col-span-12 p-0 lg:col-span-6">
                        <x-base.tabs>
                            <div class="relative flex items-center p-5 border-b">
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
                                <x-base.tabs.list class="absolute inset-y-0 hidden w-auto my-auto right-5 sm:flex">
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
                                    <div class="text-center">
                                        <x-base.button
                                            class="inline-block mx-auto mt-5"
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
                    <!-- BEGIN: Daily Sales -->
                    <x-base.box class="col-span-12 p-0 lg:col-span-6">
                        <div class="flex items-center px-5 py-5 border-b sm:py-3">
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
                            <div class="relative flex items-center mt-5">
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
                            <div class="relative flex items-center mt-5">
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
                    <!-- BEGIN: Latest Tasks -->
                    <x-base.box class="col-span-12 p-0 lg:col-span-6">
                        <x-base.tabs>
                            <div class="relative flex items-center p-5 border-b">
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
                                <x-base.tabs.list class="absolute inset-y-0 hidden w-auto my-auto right-5 sm:flex">
                                    <x-base.tabs.trigger>New</x-base.tabs.trigger>
                                    <x-base.tabs.trigger>Last Week</x-base.tabs.trigger>
                                </x-base.tabs.list>
                            </div>
                            <div class="p-5">
                                <x-base.tabs.content>
                                    <div class="flex items-center">
                                        <div class="pl-4 border-l-4 border-primary/20">
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
                                    <div class="flex items-center mt-5">
                                        <div class="pl-4 border-l-4 border-primary/20">
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
                                    <div class="flex items-center mt-5">
                                        <div class="pl-4 border-l-4 border-primary/20">
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
                            </div>
                        </x-base.tabs>
                    </x-base.box>
                    <!-- END: Latest Tasks -->
                    <!-- BEGIN: General Statistic -->
                    <x-base.box class="col-span-12 p-0">
                        <div class="flex items-center px-5 py-5 border-b sm:py-3">
                            <h2 class="mr-auto text-base font-medium">
                                General Statistics
                            </h2>
                            <x-base.dropdown-menu class="ml-auto sm:hidden">
                                <x-base.dropdown-menu.trigger
                                    class="block size-5"
                                    href="#"
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
                                        XML
                                    </x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                            <x-base.button class="hidden sm:flex">
                                <x-base.lucide
                                    class="mr-2 size-4"
                                    icon="File"
                                /> Download XML
                            </x-base.button>
                        </div>
                        <div class="grid grid-cols-1 gap-6 p-5 2xl:grid-cols-7">
                            <div class="2xl:col-span-2">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="col-span-2 p-5 border shadow box sm:col-span-1 2xl:col-span-2">
                                        <div class="font-medium">Net Worth</div>
                                        <div class="flex items-center mt-1 sm:mt-0">
                                            <div class="flex w-20 mr-4">
                                                USP:
                                                <x-base.badge
                                                    class="ml-3 [--color:var(--color-success)]">+23%</x-base.badge>
                                            </div>
                                            <div class="w-5/6 ml-5 overflow-auto">
                                                <x-simple-line-chart height="h-[51px]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2 p-5 border shadow box sm:col-span-1 2xl:col-span-2">
                                        <div class="font-medium">Sales</div>
                                        <div class="flex items-center mt-1 sm:mt-0">
                                            <div class="flex w-20 mr-4">
                                                USP:
                                                <x-base.badge
                                                    class="ml-3 [--color:var(--color-pending)]">-5%</x-base.badge>
                                            </div>
                                            <div class="w-5/6 ml-5 overflow-auto">
                                                <x-simple-line-chart height="h-[51px]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2 p-5 border shadow box sm:col-span-1 2xl:col-span-2">
                                        <div class="font-medium">Profit</div>
                                        <div class="flex items-center mt-1 sm:mt-0">
                                            <div class="flex w-20 mr-4">
                                                USP:
                                                <x-base.badge
                                                    class="ml-3 [--color:var(--color-danger)]">-10%</x-base.badge>
                                            </div>
                                            <div class="w-5/6 ml-5 overflow-auto">
                                                <x-simple-line-chart height="h-[51px]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2 p-5 border shadow box sm:col-span-1 2xl:col-span-2">
                                        <div class="font-medium">Products</div>
                                        <div class="flex items-center mt-1 sm:mt-0">
                                            <div class="flex w-20 mr-4">
                                                USP:
                                                <x-base.badge
                                                    class="ml-3 [--color:var(--color-primary)]">+55%</x-base.badge>
                                            </div>
                                            <div class="w-5/6 ml-5 overflow-auto">
                                                <x-simple-line-chart height="h-[51px]" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full 2xl:col-span-5">
                                <div class="flex justify-center mt-8">
                                    <div class="flex items-center mr-5">
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                        </div>
                                        <span>Product Profit</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-danger)]">
                                        </div>
                                        <span>Author Sales</span>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <x-stacked-bar-chart-1 height="h-[420px]" />
                                </div>
                            </div>
                        </div>
                    </x-base.box>
                    <!-- END: General Statistic -->
                </div>
            </x-base.tabs.content>
        </x-base.tabs.contents>
    </x-base.tabs>
@endsection
