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
                <div class="flex items-center justify-center flex-1 px-5 pt-5 mt-6 border-t lg:mt-0 lg:border-0 lg:pt-0">
                    <div class="grid grid-cols-3 gap-5">
                        <div class="text-center">
                            <div class="text-xl font-medium">201</div>
                            <div class="opacity-70">Orders</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-medium">1k</div>
                            <div class="opacity-70">Purchases</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-medium">492</div>
                            <div class="opacity-70">Reviews</div>
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
                        /> Profile
                    </x-base.tabs.trigger>
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Aperture"
                        /> Account
                    </x-base.tabs.trigger>
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="PackageCheck"
                        /> Change Password
                    </x-base.tabs.trigger>
                    <x-base.tabs.trigger>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Palette"
                        /> Settings
                    </x-base.tabs.trigger>
                </x-base.tabs.list>
            </div>
        </x-base.box>
        <!-- END: Profile Info -->
        <x-base.tabs.contents>
            <x-base.tabs.content class="mt-8">
                <div class="grid grid-cols-12 gap-x-6 gap-y-8">
                    <!-- BEGIN: Latest Uploads -->
                    <x-base.box class="col-span-12 p-0 lg:col-span-6">
                        <div class="flex items-center px-5 py-5 border-b sm:py-3">
                            <h2 class="mr-auto text-base font-medium">
                                Latest Uploads
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
                                    <x-base.dropdown-menu.item>All Files</x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                            <x-base.button class="hidden sm:flex">
                                All Files
                            </x-base.button>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center">
                                <x-base.file-icon
                                    class="w-12 file"
                                    variant="directory"
                                />
                                <div class="ml-4">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Documentation
                                    </a>
                                    <div class="mt-0.5 text-xs opacity-70">40 KB</div>
                                </div>
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
                                                icon="Users"
                                            /> Share
                                            File
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2 size-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.dropdown-menu.item>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                            <div class="flex items-center mt-5">
                                <x-base.file-icon
                                    class="w-12 text-xs file"
                                    type="MP3"
                                    variant="file"
                                />
                                <div class="ml-4">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Celine Dion - Ashes
                                    </a>
                                    <div class="mt-0.5 text-xs opacity-70">40 KB</div>
                                </div>
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
                                                icon="Users"
                                            /> Share
                                            File
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2 size-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.dropdown-menu.item>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                            <div class="flex items-center mt-5">
                                <x-base.file-icon
                                    class="w-12 file"
                                    variant="empty-directory"
                                />
                                <div class="ml-4">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Resources
                                    </a>
                                    <div class="mt-0.5 text-xs opacity-70">0 KB</div>
                                </div>
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
                                                icon="Users"
                                            /> Share
                                            File
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2 size-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.dropdown-menu.item>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                        </div>
                    </x-base.box>
                    <!-- END: Latest Uploads -->
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
                    <!-- BEGIN: New Products -->
                    <x-base.box class="col-span-12 p-0">
                        <div class="flex items-center px-5 py-3 border-b">
                            <h2 class="mr-auto text-base font-medium">
                                New Products
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
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                    <div class="px-5">
                                        <div class="flex flex-col items-center pb-5 lg:flex-row">
                                            <div class="flex flex-col items-center pr-5 sm:flex-row lg:border-r">
                                                <div class="sm:mr-5">
                                                    <x-base.avatar
                                                        class="size-20"
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                    />
                                                </div>
                                                <div class="mt-3 mr-auto text-center sm:mt-0 sm:text-left">
                                                    <a
                                                        class="text-lg font-medium"
                                                        href=""
                                                    >
                                                        {{ $faker['products'][0]['name'] }}
                                                    </a>
                                                    <div class="mt-1 opacity-70 sm:mt-0">
                                                        {{ $faker['news'][0]['short_content'] }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex items-center justify-center flex-1 w-full px-5 pt-4 mt-6 border-t lg:mt-0 lg:w-auto lg:border-t-0 lg:pt-0">
                                                <div class="w-20 py-3 text-center rounded-md">
                                                    <div class="text-xl font-medium">
                                                        {{ $faker['totals'][0] }}
                                                    </div>
                                                    <div class="opacity-70">Orders</div>
                                                </div>
                                                <div class="w-20 py-3 text-center rounded-md">
                                                    <div class="text-xl font-medium">
                                                        {{ $faker['totals'][1] }}k
                                                    </div>
                                                    <div class="opacity-70">Purchases</div>
                                                </div>
                                                <div class="w-20 py-3 text-center rounded-md">
                                                    <div class="text-xl font-medium">
                                                        {{ $faker['totals'][0] }}
                                                    </div>
                                                    <div class="opacity-70">Reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center pt-5 border-t sm:flex-row">
                                            <div
                                                class="flex items-center justify-center w-full pb-5 border-b sm:w-auto sm:justify-start sm:border-b-0 sm:pb-0">
                                                <div
                                                    class="bg-(--color)/20 border-(--color)/60 text-(--color) mr-3 rounded-xl border px-3 py-2 font-medium [--color:var(--color-primary)]">
                                                    {{ $faker['dates'][0] }}
                                                </div>
                                                <div class="opacity-70">
                                                    Date of Release
                                                </div>
                                            </div>
                                            <div class="flex mt-5 sm:ml-auto sm:mt-0">
                                                <x-base.button class="ml-auto">
                                                    Preview
                                                </x-base.button>
                                                <x-base.button class="ml-2">
                                                    Details
                                                </x-base.button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </x-base.tiny-slider>
                        </div>
                    </x-base.box>
                    <!-- END: New Products -->
                    <!-- BEGIN: New Authors -->
                    <x-base.box class="col-span-12 p-0">
                        <div class="flex items-center px-5 py-3 border-b">
                            <h2 class="mr-auto text-base font-medium">New Authors</h2>
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
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                    <div class="px-5">
                                        <div class="flex flex-col items-center pb-5 lg:flex-row">
                                            <div class="flex flex-col items-center flex-1 pr-5 sm:flex-row lg:border-r">
                                                <div class="sm:mr-5">
                                                    <x-base.avatar
                                                        class="size-20"
                                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                                    />
                                                </div>
                                                <div class="mt-3 mr-auto text-center sm:mt-0 sm:text-left">
                                                    <a
                                                        class="text-lg font-medium"
                                                        href=""
                                                    >
                                                        {{ $faker['users'][0]['name'] }}
                                                    </a>
                                                    <div class="mt-1 opacity-70 sm:mt-0">
                                                        {{ $faker['jobs'][0] }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col items-center justify-center flex-1 w-full px-5 pt-4 mt-6 border-t lg:mt-0 lg:w-auto lg:items-start lg:border-t-0 lg:pt-0">
                                                <div class="flex items-center">
                                                    <a
                                                        class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full"
                                                        href=""
                                                    >
                                                        <x-base.lucide
                                                            class="fill-current size-3 opacity-70"
                                                            icon="Facebook"
                                                        />
                                                    </a>
                                                    {{ $faker['users'][0]['email'] }}
                                                </div>
                                                <div class="flex items-center mt-2">
                                                    <a
                                                        class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full"
                                                        href=""
                                                    >
                                                        <x-base.lucide
                                                            class="fill-current size-3 opacity-70"
                                                            icon="Twitter"
                                                        />
                                                    </a>
                                                    {{ $faker['users'][0]['name'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center pt-5 border-t sm:flex-row">
                                            <div
                                                class="flex items-center justify-center w-full pb-5 border-b sm:w-auto sm:justify-start sm:border-b-0 sm:pb-0">
                                                <div
                                                    class="bg-(--color)/20 border-(--color)/60 text-(--color) mr-3 rounded-xl border px-3 py-2 font-medium [--color:var(--color-primary)]">
                                                    {{ $faker['dates'][0] }}
                                                </div>
                                                <div class="opacity-70">Joined Date</div>
                                            </div>
                                            <div class="flex mt-5 sm:ml-auto sm:mt-0">
                                                <x-base.button class="ml-auto">
                                                    Message
                                                </x-base.button>
                                                <x-base.button class="ml-2">
                                                    Profile
                                                </x-base.button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </x-base.tiny-slider>
                        </div>
                    </x-base.box>
                    <!-- END: New Authors -->
                </div>
            </x-base.tabs.content>
        </x-base.tabs.contents>
    </x-base.tabs>
@endsection
