@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>File Manager - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 grid grid-cols-10 gap-6">
        <div class="col-span-10 lg:col-span-2">
            <h2 class="mr-auto mt-2 text-lg font-medium">
                File Manager
            </h2>
            <!-- BEGIN: File Manager Menu -->
            <x-base.box class="mt-6">
                <div class="flex flex-col gap-2">
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 active flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Image"
                        /> Images <x-base.badge class="ms-auto [--color:var(--color-warning)]">412</x-base.badge>
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Video"
                        /> Videos
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="File"
                        /> Documents
                        <x-base.badge class="ms-auto [--color:var(--color-warning)]">34</x-base.badge>
                    </a>
                    <a
                        class="[&.active]:bg-foreground/5 [&.active]:border-foreground/10 flex items-center rounded-md border border-transparent px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Users"
                        /> Shared
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
                <div class="mt-4 border-t pt-4">
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
            <!-- END: File Manager Menu -->
        </div>
        <div class="col-span-10 lg:col-span-8">
            <!-- BEGIN: File Manager Filter -->
            <div class="flex flex-col-reverse items-center sm:flex-row">
                <div class="relative mr-auto mt-3 w-full sm:mt-0 sm:w-auto">
                    <x-base.lucide
                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 size-4 opacity-70"
                        icon="Search"
                    />
                    <x-base.input
                        class="box w-full px-10 sm:w-64"
                        type="text"
                        placeholder="Search files"
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
                                        File Name
                                    </x-base.label>
                                    <x-base.input
                                        class="flex-1"
                                        id="input-filter-1"
                                        type="text"
                                        placeholder="Type the file name"
                                    />
                                </x-base.form.item>
                                <x-base.form.item class="col-span-6">
                                    <x-base.label
                                        class="text-xs"
                                        for="input-filter-2"
                                    >
                                        Shared With
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
                                        Created At
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
                                        Size
                                    </x-base.label>
                                    <x-base.select
                                        class="flex-1"
                                        id="input-filter-4"
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
                        Upload New Files
                    </x-base.button>
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
                                    icon="File"
                                /> Share Files
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2 size-4"
                                    icon="Settings"
                                /> Settings
                            </x-base.dropdown-menu.item>
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </div>
            </div>
            <!-- END: File Manager Filter -->
            <!-- BEGIN: Directory & Files -->
            <div class="mt-5 grid grid-cols-2 gap-3 gap-y-8 sm:gap-x-5 md:grid-cols-4 lg:grid-cols-5">
                @foreach ($fakers as $faker)
                    <div>
                        <x-base.box class="relative rounded-md px-3 pb-5 pt-8 sm:px-5">
                            <div class="absolute left-0 top-0 ml-3 mt-3">
                                @if ($faker['true_false'][0])
                                    <x-base.checkbox
                                        type="checkbox"
                                        checked
                                    />
                                @else
                                    <x-base.checkbox type="checkbox" />
                                @endif
                            </div>
                            @if ($faker['files'][0]['type'] == 'Empty Folder')
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    variant="empty-directory"
                                />
                            @elseif ($faker['files'][0]['type'] == 'Folder')
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    variant="directory"
                                />
                            @elseif ($faker['files'][0]['type'] == 'Image')
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    src="{{ Vite::asset(strtolower($faker['files'][0]['file_name'])) }}"
                                    variant="image"
                                />
                            @else
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    type="{{ $faker['files'][0]['type'] }}"
                                    variant="file"
                                />
                            @endif
                            <a
                                class="mt-4 block truncate text-center font-medium"
                                href=""
                            >
                                {{ explode('/', $faker['files'][0]['file_name'])[count(explode('/', $faker['files'][0]['file_name'])) - 1] }}
                            </a>
                            <div class="mt-0.5 text-center text-xs opacity-70">
                                {{ $faker['files'][0]['size'] }}
                            </div>
                            <x-base.dropdown-menu class="absolute right-0 top-0 ml-auto mr-2 mt-3">
                                <x-base.dropdown-menu.trigger
                                    class="block size-4"
                                    href="#"
                                    as="a"
                                >
                                    <x-base.lucide
                                        class="size-4 opacity-70"
                                        icon="MoreVertical"
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
                                        /> Delete
                                    </x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                        </x-base.box>
                    </div>
                @endforeach
            </div>
            <!-- END: Directory & Files -->
            <!-- BEGIN: Pagination -->
            <div class="mt-6 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="size-4"
                            icon="ChevronsLeft"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="size-4"
                            icon="ChevronLeft"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>1</x-base.pagination.link>
                    <x-base.pagination.link active>2</x-base.pagination.link>
                    <x-base.pagination.link>3</x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="size-4"
                            icon="ChevronRight"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="size-4"
                            icon="ChevronsRight"
                        />
                    </x-base.pagination.link>
                </x-base.pagination>
                <x-base.select class="box mt-3 w-20 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </x-base.select>
            </div>
            <!-- END: Pagination -->
        </div>
    </div>
@endsection
