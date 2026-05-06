@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Chat - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div>
        <div class="mt-8 flex flex-col items-center sm:flex-row">
            <h2 class="mr-auto text-lg font-medium">Chat</h2>
            <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
                <x-base.button
                    class="mr-2"
                    variant="primary"
                >
                    Start New Chat
                </x-base.button>
                <x-base.dropdown-menu class="ml-auto sm:ml-0">
                    <x-base.dropdown-menu>
                        <x-base.dropdown-menu.trigger
                            class="box px-2"
                            as="x-base.button"
                        >
                            <span class="flex size-5 items-center justify-center">
                                <x-base.lucide
                                    class="size-4"
                                    icon="Plus"
                                />
                            </span>
                        </x-base.dropdown-menu.trigger>
                        <x-base.dropdown-menu.content class="w-40">
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2 size-4"
                                    icon="User"
                                /> Create Group
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2 size-4"
                                    icon="Settings"
                                /> Settings
                            </x-base.dropdown-menu.item>
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </x-base.dropdown-menu>
            </div>
        </div>
        <div class="mt-5 grid grid-cols-12 gap-5">
            <!-- BEGIN: Chat Side Menu -->
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <x-base.tabs class="space-y-8">
                    <x-base.box class="p-2">
                        <x-base.tabs.list class="m-0">
                            <x-base.tabs.trigger>Chats</x-base.tabs.trigger>
                            <x-base.tabs.trigger>Friends</x-base.tabs.trigger>
                            <x-base.tabs.trigger>Profile</x-base.tabs.trigger>
                        </x-base.tabs.list>
                    </x-base.box>
                    <x-base.tabs.contents>
                        <x-base.tabs.content class="space-y-8">
                            <x-base.box>
                                <div class="relative">
                                    <x-base.input
                                        class="bg-foreground/[.03] px-4 py-3 pr-10"
                                        type="text"
                                        placeholder="Search for messages or users..."
                                    />
                                    <x-base.lucide
                                        class="inset-y-0 right-0 my-auto mr-3 hidden size-4 opacity-70 sm:absolute"
                                        icon="Search"
                                    />
                                </div>
                                <div class="scrollbar-hidden overflow-x-auto">
                                    <div class="mt-5 flex">
                                        @foreach (array_slice($fakers, 0, 10) as $faker)
                                            <a
                                                class="mr-4 w-11 cursor-pointer"
                                                href=""
                                            >
                                                <div class="relative">
                                                    <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                                    <div
                                                        class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                                    </div>
                                                </div>
                                                <div class="mt-1.5 truncate text-center text-xs opacity-70">
                                                    {{ $faker['users'][0]['name'] }}
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </x-base.box>
                            <div class="scrollbar-hidden -mr-1 h-[29rem] space-y-7 overflow-y-auto pr-1 pt-1">
                                @foreach (array_slice($fakers, 0, 10) as $fakerKey => $faker)
                                    <x-base.box class="chat-item relative flex cursor-pointer items-center">
                                        <div class="relative mr-1">
                                            <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                            <div
                                                class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                            </div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <div class="flex items-center">
                                                <a
                                                    class="font-medium"
                                                    href="#"
                                                >
                                                    {{ $faker['users'][0]['name'] }}
                                                </a>
                                                <div class="ml-auto text-xs opacity-70">
                                                    {{ $faker['times'][0] }}
                                                </div>
                                            </div>
                                            <div class="mt-1 w-full truncate opacity-70">
                                                {{ $faker['news'][0]['short_content'] }}
                                            </div>
                                        </div>
                                        @if ($faker['true_false'][0])
                                            <x-base.badge
                                                class="absolute right-0 top-0 -mr-1 -mt-1 [--color:var(--color-primary)]"
                                            >
                                                {{ $faker['notification_count'] }}
                                            </x-base.badge>
                                        @endif
                                    </x-base.box>
                                @endforeach
                            </div>
                        </x-base.tabs.content>
                        <x-base.tabs.content class="space-y-8">
                            <x-base.box>
                                <div class="relative">
                                    <x-base.input
                                        class="bg-foreground/[.03] px-4 py-3 pr-10"
                                        type="text"
                                        placeholder="Search for messages or users..."
                                    />
                                    <x-base.lucide
                                        class="inset-y-0 right-0 my-auto mr-3 hidden size-4 opacity-70 sm:absolute"
                                        icon="Search"
                                    />
                                </div>
                                <x-base.button
                                    class="mt-3 w-full"
                                    type="button"
                                    variant="primary"
                                >
                                    Invite Friends
                                </x-base.button>
                            </x-base.box>
                            <div class="scrollbar-hidden -mr-1 h-[29rem] space-y-7 overflow-y-auto pr-1 pt-1">
                                <div class="opacity-70">A</div>
                                <x-base.box class="relative flex cursor-pointer items-center">
                                    <div class="relative mr-1">
                                        <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                        <div
                                            class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                {{ $fakers[0]['users'][0]['name'] }}
                                            </a>
                                        </div>
                                        <div class="mt-1 w-full truncate text-xs opacity-70">
                                            Last seen 2 hours ago
                                        </div>
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
                                                    icon="Share"
                                                />
                                                Share Contact
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Copy"
                                                /> Copy
                                                Contact
                                            </x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </x-base.box>
                                <x-base.box class="relative flex cursor-pointer items-center">
                                    <div class="relative mr-1">
                                        <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                        <div
                                            class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                {{ $fakers[1]['users'][0]['name'] }}
                                            </a>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-xs opacity-70">
                                            Last seen 2 hours ago
                                        </div>
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
                                                    icon="Share"
                                                />
                                                Share Contact
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Copy"
                                                /> Copy
                                                Contact
                                            </x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </x-base.box>
                                <div class="opacity-70">B</div>
                                <x-base.box class="relative flex cursor-pointer items-center">
                                    <div class="relative mr-1">
                                        <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                        <div
                                            class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                {{ $fakers[2]['users'][0]['name'] }}
                                            </a>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-xs opacity-70">
                                            Last seen 2 hours ago
                                        </div>
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
                                                    icon="Share"
                                                />
                                                Share Contact
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Copy"
                                                /> Copy
                                                Contact
                                            </x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </x-base.box>
                                <x-base.box class="relative flex cursor-pointer items-center">
                                    <div class="relative mr-1">
                                        <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                        <div
                                            class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                {{ $fakers[3]['users'][0]['name'] }}
                                            </a>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-xs opacity-70">
                                            Last seen 2 hours ago
                                        </div>
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
                                                    icon="Share"
                                                />
                                                Share Contact
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Copy"
                                                /> Copy
                                                Contact
                                            </x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </x-base.box>
                                <x-base.box class="relative flex cursor-pointer items-center">
                                    <div class="relative mr-1">
                                        <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                        <div
                                            class="bg-success/90 border-background absolute bottom-0 right-0 h-3 w-3 rounded-full border-2">
                                        </div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a
                                                class="font-medium"
                                                href=""
                                            >
                                                {{ $fakers[4]['users'][0]['name'] }}
                                            </a>
                                        </div>
                                        <div class="mt-0.5 w-full truncate text-xs opacity-70">
                                            Last seen 2 hours ago
                                        </div>
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
                                                    icon="Share"
                                                />
                                                Share Contact
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Copy"
                                                /> Copy
                                                Contact
                                            </x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </x-base.box>
                            </div>
                        </x-base.tabs.content>
                        <x-base.tabs.content class="space-y-8">
                            <x-base.box class="py-10">
                                <x-base.avatar
                                    class="mx-auto size-20"
                                    src="{{ Vite::asset($faker['photos'][0]) }}"
                                />
                                <div class="mt-3 text-center">
                                    <div class="text-lg font-medium">
                                        {{ $fakers[0]['users'][0]['name'] }}
                                    </div>
                                    <div class="mt-1 opacity-70">
                                        Tailwind Admin Dashboard Template
                                    </div>
                                </div>
                            </x-base.box>
                            <x-base.box>
                                <div class="flex items-center border-b pb-5">
                                    <div>
                                        <div class="opacity-70">Country</div>
                                        <div class="mt-1">New York City, USA</div>
                                    </div>
                                    <x-base.lucide
                                        class="ml-auto size-4 opacity-70"
                                        icon="Globe"
                                    />
                                </div>
                                <div class="flex items-center border-b py-5">
                                    <div>
                                        <div class="opacity-70">Phone</div>
                                        <div class="mt-1">+32 19 23 62 24 34</div>
                                    </div>
                                    <x-base.lucide
                                        class="ml-auto size-4 opacity-70"
                                        icon="Mic"
                                    />
                                </div>
                                <div class="flex items-center border-b py-5">
                                    <div>
                                        <div class="opacity-70">Email</div>
                                        <div class="mt-1">
                                            {{ $fakers[0]['users'][0]['email'] }}
                                        </div>
                                    </div>
                                    <x-base.lucide
                                        class="ml-auto size-4 opacity-70"
                                        icon="Mail"
                                    />
                                </div>
                                <div class="flex items-center pt-5">
                                    <div>
                                        <div class="opacity-70">Joined Date</div>
                                        <div class="mt-1">{{ $fakers[0]['dates'][0] }}</div>
                                    </div>
                                    <x-base.lucide
                                        class="ml-auto size-4 opacity-70"
                                        icon="Clock"
                                    />
                                </div>
                            </x-base.box>
                        </x-base.tabs.content>
                    </x-base.tabs.contents>
                </x-base.tabs>
            </div>
            <!-- END: Chat Side Menu -->
            <!-- BEGIN: Chat Content -->
            <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                <x-base.box class="h-[46rem] p-0">
                    <!-- BEGIN: Chat Active -->
                    <div class="chat-content">
                        <div class="flex h-full flex-col">
                            <div class="flex flex-col border-b px-5 py-4 sm:flex-row">
                                <div class="flex items-center">
                                    <x-base.avatar
                                        class="size-10 sm:size-12"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                    <div class="ml-3 mr-auto">
                                        <div class="text-base font-medium">
                                            {{ $fakers[0]['users'][0]['name'] }}
                                        </div>
                                        <div class="text-xs opacity-70 sm:text-sm">
                                            Hey, I am using chat <span class="mx-1">•</span>
                                            Online
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="-mx-5 mt-5 flex items-center border-t px-5 pt-3 sm:mx-0 sm:ml-auto sm:mt-0 sm:border-0 sm:px-0 sm:pt-0">
                                    <a
                                        class="size-5 opacity-70"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="Search"
                                        />
                                    </a>
                                    <a
                                        class="ml-5 size-5 opacity-70"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="UserPlus"
                                        />
                                    </a>
                                    <x-base.dropdown-menu class="ml-auto sm:ml-3">
                                        <x-base.dropdown-menu.trigger
                                            class="size-5 opacity-70"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-5"
                                                icon="MoreVertical"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-40">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Share"
                                                />
                                                Share Contact
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
                            </div>
                            <div class="scrollbar-hidden flex-1 overflow-y-scroll px-5 pt-5">
                                <div class="float-left mb-4 flex max-w-[90%] items-end sm:max-w-[49%]">
                                    <x-base.avatar
                                        class="mr-5 hidden size-10 sm:block"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                    <div
                                        class="bg-(--color)/10 border-(--color)/20 rounded-r-xl rounded-t-xl border px-4 py-3 [--color:var(--color-warning)]">
                                        Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                        <div class="mt-1 text-xs opacity-70">
                                            2 mins ago
                                        </div>
                                    </div>
                                    <x-base.dropdown-menu class="my-auto ml-3 hidden sm:block">
                                        <x-base.dropdown-menu.trigger
                                            class="size-4 opacity-70"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-4"
                                                icon="MoreVertical"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-40">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="CornerUpLeft"
                                                />
                                                Reply
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
                                <div class="clear-both"></div>
                                <div class="float-right mb-4 flex max-w-[90%] items-end sm:max-w-[49%]">
                                    <x-base.dropdown-menu class="my-auto mr-3 hidden sm:block">
                                        <x-base.dropdown-menu.trigger
                                            class="size-4 opacity-70"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-4"
                                                icon="MoreVertical"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-40">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="CornerUpLeft"
                                                />
                                                Reply
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
                                    <div
                                        class="bg-(--color)/10 border-(--color)/20 rounded-l-xl rounded-t-xl border px-4 py-3 [--color:var(--color-primary)]">
                                        Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                        <div class="mt-1 text-xs opacity-70">
                                            1 mins ago
                                        </div>
                                    </div>
                                    <x-base.avatar
                                        class="ml-5 hidden size-10 sm:block"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                </div>
                                <div class="clear-both"></div>
                                <div class="float-right mb-4 flex max-w-[90%] items-end sm:max-w-[49%]">
                                    <x-base.dropdown-menu class="my-auto mr-3 hidden sm:block">
                                        <x-base.dropdown-menu.trigger
                                            class="size-4 opacity-70"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-4"
                                                icon="MoreVertical"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-40">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="CornerUpLeft"
                                                />
                                                Reply
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
                                    <div
                                        class="bg-(--color)/10 border-(--color)/20 rounded-l-xl rounded-t-xl border px-4 py-3 [--color:var(--color-primary)]">
                                        Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                        <div class="mt-1 text-xs opacity-70">
                                            59 secs ago
                                        </div>
                                    </div>
                                    <x-base.avatar
                                        class="ml-5 hidden size-10 sm:block"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                </div>
                                <div class="clear-both"></div>
                                <div class="mb-10 mt-5 text-center opacity-70">
                                    Today
                                </div>
                                <div class="float-left mb-4 flex max-w-[90%] items-end sm:max-w-[49%]">
                                    <x-base.avatar
                                        class="mr-5 hidden size-10 sm:block"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                    <div
                                        class="bg-(--color)/10 border-(--color)/20 rounded-r-xl rounded-t-xl border px-4 py-3 [--color:var(--color-warning)]">
                                        Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                        <div class="mt-1 text-xs opacity-70">
                                            10 secs ago
                                        </div>
                                    </div>
                                    <x-base.dropdown-menu class="my-auto ml-3 hidden sm:block">
                                        <x-base.dropdown-menu.trigger
                                            class="size-4 opacity-70"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-4"
                                                icon="MoreVertical"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-40">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="CornerUpLeft"
                                                />
                                                Reply
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
                                <div class="clear-both"></div>
                                <div class="float-right mb-4 flex max-w-[90%] items-end sm:max-w-[49%]">
                                    <x-base.dropdown-menu class="my-auto mr-3 hidden sm:block">
                                        <x-base.dropdown-menu.trigger
                                            class="size-4 opacity-70"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-4"
                                                icon="MoreVertical"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-40">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="CornerUpLeft"
                                                />
                                                Reply
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
                                    <div
                                        class="bg-(--color)/10 border-(--color)/20 rounded-l-xl rounded-t-xl border px-4 py-3 [--color:var(--color-primary)]">
                                        Lorem ipsum
                                        <div class="mt-1 text-xs opacity-70">
                                            1 secs ago
                                        </div>
                                    </div>
                                    <x-base.avatar
                                        class="ml-5 hidden size-10 sm:block"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                </div>
                                <div class="clear-both"></div>
                                <div class="float-left mb-4 flex max-w-[90%] items-end sm:max-w-[49%]">
                                    <x-base.avatar
                                        class="mr-5 hidden size-10 sm:block"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                    <div
                                        class="bg-(--color)/10 border-(--color)/20 rounded-r-xl rounded-t-xl border px-4 py-3 [--color:var(--color-warning)]">
                                        {{ $fakers[0]['users'][0]['name'] }} is typing
                                        <span class="typing-dots ml-1">
                                            <span>.</span>
                                            <span>.</span>
                                            <span>.</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center border-t pb-10 pt-4 sm:py-4">
                                <x-base.textarea
                                    class="min-h-auto mx-5 h-16 resize-none border-transparent px-5 py-3"
                                    rows="1"
                                    placeholder="Type your message..."
                                ></x-base.textarea>
                                <div class="absolute bottom-0 left-0 mb-5 ml-5 flex sm:static sm:mb-0 sm:ml-0">
                                    <x-base.dropdown-menu
                                        class="mr-3 sm:mr-5"
                                        placement="top-end"
                                    >
                                        <x-base.dropdown-menu.trigger
                                            class="block size-4 opacity-70 sm:size-5"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="size-full"
                                                icon="Smile"
                                            />
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-[26rem] p-4">
                                            <div class="relative">
                                                <x-base.input
                                                    class="bg-foreground/[.03] pr-10"
                                                    type="text"
                                                    placeholder="Search emojis..."
                                                />
                                                <x-base.lucide
                                                    class="absolute inset-y-0 right-0 my-auto mr-3 size-4 opacity-70"
                                                    icon="Search"
                                                />
                                            </div>
                                            <x-base.tabs class="mt-5">
                                                <x-base.tabs.list>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 496 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 640 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-48 0l-.003-.282-26.064 22.741-62.679-58.5 16.454-84.355 34.303 3.072c-24.889-34.216-60.004-60.089-100.709-73.141l13.651 31.939L256 139l-74.953-41.525 13.651-31.939c-40.631 13.028-75.78 38.87-100.709 73.141l34.565-3.073 16.192 84.355-62.678 58.5-26.064-22.741-.003.282c0 43.015 13.497 83.952 38.472 117.991l7.704-33.897 85.138 10.447 36.301 77.826-29.902 17.786c40.202 13.122 84.29 13.148 124.572 0l-29.902-17.786 36.301-77.826 85.138-10.447 7.704 33.897C442.503 339.952 456 299.015 456 256zm-248.102 69.571l-29.894-91.312L256 177.732l77.996 56.527-29.622 91.312h-96.476z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 352 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                    <x-base.tabs.trigger>
                                                        <svg
                                                            class="size-4"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                fill="currentColor"
                                                                d="M511.99 32.01c0-21.71-21.1-37.01-41.6-30.51L150.4 96c-13.3 4.2-22.4 16.5-22.4 30.5v261.42c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64V214.31l256-75.02v184.63c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64l-.01-351.99z"
                                                            ></path>
                                                        </svg>
                                                    </x-base.tabs.trigger>
                                                </x-base.tabs.list>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">
                                                        Recent Emojis
                                                    </div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😂
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">
                                                        Smileys & People
                                                    </div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☺️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☹️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☠️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                😾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;⚕️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;⚕️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🎓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🎓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🏫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🏫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;⚖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;⚖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🌾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🌾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🍳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🍳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🔧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🔧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🏭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🏭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;💼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;💼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🔬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🔬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;💻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;💻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🎤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🎤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🎨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🎨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;✈️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;✈️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🚀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🚀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;🚒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;🚒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👮&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👮&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕵️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕵️&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕵️&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💂&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💂&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👷&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👷&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👳&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👳&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👱&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👱&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧙&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧙&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧚&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧚&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧛&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧛&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧜&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧜&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧝&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧝&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧞&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧞&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧟&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧟&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙍&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙍&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙎&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙎&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙅&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙅&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙆&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙆&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💁&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💁&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙋&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙋&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙇&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙇&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤦&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤦&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤷&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤷&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💆&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💆&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💇&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💇&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚶&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚶&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏃&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏃&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👯&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👯&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧖&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧖&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧗&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧗&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧘&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧘&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕴️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗣️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛷️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏌️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏌️&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏌️&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏄&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏄&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚣&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚣&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏊&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏊&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛹️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛹️&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛹️&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏋️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏋️&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏋️&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚴&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚴&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚵&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚵&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏎️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏍️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤸&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤸&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤼&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤼&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤽&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤽&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤾&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤾&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤹&zwj;♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤹&zwj;♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;❤️&zwj;💋&zwj;👨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;❤️&zwj;💋&zwj;👨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;❤️&zwj;💋&zwj;👩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;❤️&zwj;👨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;❤️&zwj;👨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;❤️&zwj;👩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👩&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👩&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👩&zwj;👧&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👩&zwj;👦&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👩&zwj;👧&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👨&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👨&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👨&zwj;👧&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👨&zwj;👦&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👨&zwj;👧&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👩&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👩&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👩&zwj;👧&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👩&zwj;👦&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👩&zwj;👧&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👦&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👧&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👨&zwj;👧&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👦&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👧&zwj;👦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👩&zwj;👧&zwj;👧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☝️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✌️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖐️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✍️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🙏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🤝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👁️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👁️&zwj;🗨️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❤️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❣️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗨️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗯️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕳️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕶️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛍️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                👒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛑️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💎
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">
                                                        Animals & Nature
                                                    </div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐿️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕊️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🐞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕷️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕸️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🦂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏵️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☘️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍃
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">
                                                        Food & Drink
                                                    </div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌶️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🧀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍽️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🍴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏺
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">Activities</div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎗️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎟️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛸️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕹️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♠️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♥️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♦️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♣️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🃏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🀄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎴
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">
                                                        Travel & Places
                                                    </div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗺️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏔️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛰️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏕️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏜️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏝️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏞️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏟️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏛️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏗️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏘️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏙️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏚️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛩️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♨️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖼️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛣️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛤️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛳️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛴️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛥️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✈️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛩️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛰️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛎️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛏️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛋️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⌛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⌚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏱️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏲️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕰️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌡️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⭐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☁️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛈️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌤️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌥️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌦️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌧️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌨️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌩️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌪️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌫️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌬️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛱️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❄️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☃️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☄️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🌊
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">Objects</div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎙️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎚️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎛️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🥁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☎️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖥️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖨️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⌨️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖱️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖲️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎞️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📽️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕯️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗞️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏷️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✉️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📥
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗳️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✏️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✒️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖋️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖊️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖌️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖍️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗒️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗓️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📇
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🖇️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗃️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗄️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗑️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗝️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔨
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛏️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚒️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛠️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗡️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚔️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛡️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚙️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗜️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚗️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛓️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚰️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚱️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🗿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛢️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛒
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                                <x-base.tabs.content class="mt-3.5">
                                                    <div class="font-medium">Symbols</div>
                                                    <div class="scrollbar-hidden mt-2 h-64 overflow-y-auto pb-10">
                                                        <div class="grid grid-cols-8">
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🏧
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚮
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚠️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚭
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🚷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔞
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☢️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☣️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⬆️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↗️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ➡️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↘️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⬇️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↙️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⬅️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↕️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↔️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↩️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ↪️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⤴️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⤵️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔃
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔄
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔝
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🛐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚛️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕉️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✡️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☸️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☯️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✝️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☦️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☪️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☮️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🕎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♈
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♉
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♊
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♋
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♍
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♏
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⛎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔀
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔂
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ▶️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏩
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏭️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏯️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ◀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏮️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔼
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏬
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏸️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏹️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏺️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⏏️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🎦
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔆
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♀️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚕️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ♻️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚜️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔱
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                📛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⭕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✅
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ☑️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✔️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✖️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❌
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ➕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ➖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ➗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ➰
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ➿
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                〽️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✳️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ✴️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❇️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ‼️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⁉️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ❗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                〰️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ©️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ®️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ™️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                #️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                *️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                0️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                1️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                2️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                3️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                4️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                5️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                6️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                7️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                8️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                9️⃣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔟
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔡
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔢
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔣
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔤
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🅰️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆎
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🅱️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆒
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆓
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ℹ️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆔
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                Ⓜ️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆕
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆖
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🅾️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆗
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🅿️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆙
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🆚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈁
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈂️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈷️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈯
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🉐
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈚
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🉑
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ㊗️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ㊙️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🈵
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ▪️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ▫️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ◻️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ◼️
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ◽
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ◾
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⬛
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⬜
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔶
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔷
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔸
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔹
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔺
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔻
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                💠
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔘
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔲
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔳
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚪
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                ⚫
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔴
                                                            </x-base.button>
                                                            <x-base.button class="border-transparent text-2xl">
                                                                🔵
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.tabs.content>
                                            </x-base.tabs>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                    <div class="relative mr-3 size-4 opacity-70 sm:mr-5 sm:size-5">
                                        <x-base.lucide
                                            class="size-full"
                                            icon="Paperclip"
                                        />
                                        <x-base.input
                                            class="absolute left-0 top-0 size-full opacity-0"
                                            type="file"
                                        />
                                    </div>
                                </div>
                                <x-base.button
                                    class="mr-5 flex size-8 flex-none items-center justify-center rounded-full sm:size-10"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide
                                        class="size-4"
                                        icon="Send"
                                    />
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                    <!-- END: Chat Active -->
                    <!-- BEGIN: Chat Default -->
                    <div class="chat-content hidden">
                        <div class="flex h-full items-center">
                            <div class="mx-auto text-center">
                                <x-base.avatar
                                    class="mx-auto size-16"
                                    src="{{ Vite::asset($faker['photos'][0]) }}"
                                />
                                <div class="mt-3">
                                    <div class="text-base font-medium">
                                        Hey, {{ $fakers[0]['users'][0]['name'] }}!
                                    </div>
                                    <div class="mt-1 opacity-70">
                                        Please select a chat to start messaging.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Chat Default -->
                </x-base.box>
            </div>
            <!-- END: Chat Content -->
        </div>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/pages/chat.js')
@endPushOnce
