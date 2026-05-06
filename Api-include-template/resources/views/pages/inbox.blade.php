@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Inbox - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 grid grid-cols-10 gap-6">
        <div class="col-span-10 lg:col-span-2">
            <h2 class="mr-auto mt-2 text-lg font-medium">Inbox</h2>
            <!-- BEGIN: Inbox Menu -->
            <x-base.box class="mt-6">
                <x-base.button
                    class="w-full"
                    type="button"
                    variant="primary"
                >
                    <x-base.lucide
                        class="size-4"
                        icon="Edit"
                    /> Compose
                </x-base.button>
                <div class="mt-6 flex flex-col gap-2 border-t border-dashed pt-5">
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 active flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Mail"
                        /> Inbox
                        <x-base.badge class="ms-auto [--color:var(--color-warning)]">214</x-base.badge>
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Star"
                        /> Marked
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Inbox"
                        /> Draft
                        <x-base.badge class="ms-auto [--color:var(--color-warning)]">21</x-base.badge>
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Send"
                        /> Sent
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Trash"
                        /> Trash
                    </a>
                </div>
                <div class="mt-4 border-t border-dashed pt-4">
                    <a
                        class="flex items-center truncate px-3 py-2"
                        href=""
                    >
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 mr-3 h-2 w-2 rounded-full border [--color:var(--color-pending)]">
                        </div>
                        Custom Work
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 mr-3 h-2 w-2 rounded-full border [--color:var(--color-success)]">
                        </div>
                        Important Meetings
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 mr-3 h-2 w-2 rounded-full border [--color:var(--color-warning)]">
                        </div>
                        Work
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 mr-3 h-2 w-2 rounded-full border [--color:var(--color-pending)]">
                        </div>
                        Design
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 mr-3 h-2 w-2 rounded-full border [--color:var(--color-danger)]">
                        </div>
                        Next Week
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Plus"
                        /> Add New Label
                    </a>
                </div>
            </x-base.box>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-10 lg:col-span-8">
            <!-- BEGIN: Inbox Filter -->
            <div class="flex flex-col-reverse items-center sm:flex-row">
                <div class="relative mr-auto mt-3 w-full sm:mt-0 sm:w-auto">
                    <x-base.lucide
                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 size-4 opacity-70"
                        icon="Search"
                    />
                    <x-base.input
                        class="box w-full px-10 sm:w-64"
                        type="text"
                        placeholder="Search mail"
                    />
                    <x-base.dropdown-menu
                        class="absolute inset-y-0 right-0 mr-3 flex items-center"
                        placement="bottom-start"
                    >
                        <x-base.dropdown-menu.trigger
                            class="block size-4"
                            href="#"
                            role="button"
                            as="a"
                        >
                            <x-base.lucide
                                class="size-4 cursor-pointer opacity-70"
                                icon="ChevronDown"
                            />
                        </x-base.dropdown-menu.trigger>
                        <x-base.dropdown-menu.content class="ml-2 w-[30rem]">
                            <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-1"
                                    >
                                        From
                                    </x-base.label>
                                    <x-base.input
                                        class="flex-1"
                                        id="input-filter-1"
                                        type="text"
                                        placeholder="example@gmail.com"
                                    />
                                </x-base.form.item>
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-2"
                                    >
                                        To
                                    </x-base.label>
                                    <x-base.input
                                        class="flex-1"
                                        id="input-filter-2"
                                        type="text"
                                        placeholder="example@gmail.com"
                                    />
                                </x-base.form.item>
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-3"
                                    >
                                        Subject
                                    </x-base.label>
                                    <x-base.input
                                        class="flex-1"
                                        id="input-filter-3"
                                        type="text"
                                        placeholder="Important Meeting"
                                    />
                                </x-base.form.item>
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-4"
                                    >
                                        Has the Words
                                    </x-base.label>
                                    <x-base.input
                                        class="flex-1"
                                        id="input-filter-4"
                                        type="text"
                                        placeholder="Job, Work, Documentation"
                                    />
                                </x-base.form.item>
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-5"
                                    >
                                        Doesn't Have
                                    </x-base.label>
                                    <x-base.input
                                        class="flex-1"
                                        id="input-filter-5"
                                        type="text"
                                        placeholder="Job, Work, Documentation"
                                    />
                                </x-base.form.item>
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-6"
                                    >
                                        Size
                                    </x-base.label>
                                    <x-base.select
                                        class="flex-1"
                                        id="input-filter-6"
                                    >
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </x-base.select>
                                </x-base.form.item>
                                <div class="col-span-12 mt-3 flex items-center">
                                    <x-base.button class="ml-auto w-32">
                                        Create Filter
                                    </x-base.button>
                                    <x-base.button
                                        class="ml-2 w-32"
                                        variant="primary"
                                    >
                                        Search
                                    </x-base.button>
                                </div>
                            </div>
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </div>
                <div class="flex w-full sm:w-auto">
                    <x-base.button
                        class="box mr-2"
                        variant="primary"
                    >
                        Start a Video Call
                    </x-base.button>
                    <x-base.dropdown-menu>
                        <x-base.dropdown-menu.trigger
                            class="box px-2"
                            as="x-base.button"
                        >
                            <span class="flex size-5 items-center justify-center">
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="Plus"
                                />
                            </span>
                        </x-base.dropdown-menu.trigger>
                        <x-base.dropdown-menu.content class="w-40">
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="User"
                                /> Contacts
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Settings"
                                /> Settings
                            </x-base.dropdown-menu.item>
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <x-base.box class="mt-5 p-0">
                <div class="flex flex-col-reverse border-b px-5 py-6 opacity-70 sm:flex-row">
                    <div
                        class="-mx-5 mt-3 flex items-center border-t px-5 pt-5 sm:mx-0 sm:mt-0 sm:border-0 sm:px-0 sm:pt-0">
                        <x-base.checkbox />
                        <x-base.dropdown-menu
                            class="ml-1"
                            placement="bottom-start"
                        >
                            <x-base.dropdown-menu.trigger
                                class="block size-5"
                                href="#"
                            >
                                <x-base.lucide
                                    class="size-5"
                                    icon="ChevronDown"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-32">
                                <x-base.dropdown-menu.item>All</x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>None</x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>Read</x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>Unread</x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>Starred</x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>Unstarred</x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                        <a
                            class="ml-5 flex size-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="size-4"
                                icon="RefreshCw"
                            />
                        </a>
                        <a
                            class="ml-5 flex size-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="size-4"
                                icon="MoreHorizontal"
                            />
                        </a>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div>1 - 50 of 5,238</div>
                        <a
                            class="ml-5 flex size-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronLeft"
                            />
                        </a>
                        <a
                            class="ml-5 flex size-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronRight"
                            />
                        </a>
                        <a
                            class="ml-5 flex size-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="size-4"
                                icon="Settings"
                            />
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @foreach ($fakers as $faker)
                        <div @class([
                            'transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b mx-px',
                            'hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded',
                            'bg-foreground/5 opacity-90' => !$faker['true_false'][0],
                            'bg-background' => $faker['true_false'][0],
                        ])>
                            <div class="flex px-5 py-3.5">
                                <div class="mr-5 flex w-72 flex-none items-center">
                                    <x-base.checkbox />
                                    <a
                                        class="ml-4 flex size-5 flex-none items-center justify-center opacity-60"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="size-4"
                                            icon="Star"
                                        />
                                    </a>
                                    <a
                                        class="ml-2 flex size-5 flex-none items-center justify-center opacity-60"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="size-4"
                                            icon="Bookmark"
                                        />
                                    </a>
                                    <x-base.avatar
                                        class="ml-5 size-7"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                        title="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                                    />
                                    <div @class(['ml-3 truncate', 'font-medium' => $faker['true_false'][0]])>
                                        {{ $faker['users'][0]['name'] }}
                                    </div>
                                </div>
                                <div class="w-64 truncate sm:w-auto">
                                    <span @class(['ml-3 truncate', 'font-medium' => $faker['true_false'][0]])>
                                        {{ $faker['news'][0]['super_short_content'] }}
                                    </span>
                                    {{ $faker['news'][0]['short_content'] }}
                                </div>
                                <div @class([
                                    'pl-10 ml-auto whitespace-nowrap',
                                    'font-medium' => $faker['true_false'][0],
                                ])>
                                    {{ $faker['times'][0] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center px-5 py-6 text-center opacity-70 sm:flex-row sm:text-left">
                    <div>4.41 GB (25%) of 17 GB used Manage</div>
                    <div class="mt-2 sm:ml-auto sm:mt-0">
                        Last account activity: 36 minutes ago
                    </div>
                </div>
            </x-base.box>
            <!-- END: Inbox Content -->
        </div>
    </div>
@endsection
