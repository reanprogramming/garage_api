@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Blog - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Blog Layout</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="box mr-2"
                variant="primary"
            >
                Add New Post
            </x-base.button>
            <x-base.dropdown-menu class="ml-auto sm:ml-0">
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
                            icon="Share"
                        /> Share Post
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Download"
                        /> Download
                        Post
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
        </div>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <!-- BEGIN: Blog Layout -->
        @foreach (array_slice($fakers, 0, 6) as $faker)
            <x-base.box class="col-span-12 p-0 md:col-span-6">
                <div
                    class="image-fit h-[320px] before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:rounded-t-xl before:bg-gradient-to-t before:from-black/90 before:to-black/10">
                    <img
                        class="rounded-t-xl"
                        src="{{ Vite::asset($faker['images'][0]) }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                    />
                    <div class="absolute z-10 flex w-full items-center px-5 pt-6">
                        <x-base.avatar
                            class="[--color:var(--color-white)]"
                            src="{{ Vite::asset($faker['photos'][0]) }}"
                        />
                        <div class="ml-3 mr-auto text-white">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $faker['users'][0]['name'] }}
                            </a>
                            <div class="mt-0.5 text-xs">
                                {{ $faker['formatted_times'][0] }}
                            </div>
                        </div>
                        <x-base.dropdown-menu class="ml-3">
                            <x-base.dropdown-menu.trigger
                                class="flex size-8 items-center justify-center rounded-full bg-white/20"
                                href="#"
                                as="a"
                            >
                                <x-base.lucide
                                    class="size-4 text-white"
                                    icon="MoreVertical"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-40">
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Edit"
                                    /> Edit Post
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Trash"
                                    /> Delete
                                    Post
                                </x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                    </div>
                    <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                        <span class="rounded-lg bg-white/20 px-2 py-1">
                            {{ $faker['products'][0]['category'] }}
                        </span>
                        <a
                            class="mt-3 block text-xl font-medium"
                            href=""
                        >
                            {{ $faker['news'][0]['title'] }}
                        </a>
                    </div>
                </div>
                <div class="p-5 opacity-70">
                    {{ $faker['news'][0]['short_content'] }}
                </div>
                <div class="flex items-center border-t px-5 py-3">
                    <x-base.tooltip
                        class="bg-foreground/5 mr-2 flex size-8 items-center justify-center rounded-full border"
                        href=""
                        as="a"
                        content="Bookmark"
                    >
                        <x-base.lucide
                            class="size-3"
                            icon="Bookmark"
                        />
                    </x-base.tooltip>
                    <div class="mr-2 flex">
                        <x-base.avatar
                            class="bg-background size-8"
                            src="{{ Vite::asset($faker['images'][0]) }}"
                            title="{{ 'Uploaded at ' . $faker['dates'][0] }}"
                        />
                        <x-base.avatar
                            class="bg-background -ms-4 size-8"
                            src="{{ Vite::asset($faker['images'][1]) }}"
                            title="{{ 'Uploaded at ' . $faker['dates'][1] }}"
                        />
                        <x-base.avatar
                            class="bg-background -ms-4 size-8"
                            src="{{ Vite::asset($faker['images'][2]) }}"
                            title="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                        />
                    </div>
                    <x-base.tooltip
                        class="bg-(--color)/10 border-(--color)/20 text-(--color) ml-auto flex size-8 items-center justify-center rounded-full border [--color:var(--color-primary)]"
                        href=""
                        as="a"
                        content="Share"
                    >
                        <x-base.lucide
                            class="size-3"
                            icon="Share"
                        />
                    </x-base.tooltip>
                    <x-base.tooltip
                        class="bg-primary ml-2 flex size-8 items-center justify-center rounded-full text-white"
                        href=""
                        as="a"
                        content="Download PDF"
                    >
                        <x-base.lucide
                            class="size-3"
                            icon="Share"
                        />
                    </x-base.tooltip>
                </div>
                <div class="border-t px-5 pb-5 pt-3">
                    <div class="flex w-full text-xs opacity-70 sm:text-sm">
                        <div class="mr-2">
                            Comments:
                            <span class="font-medium">{{ $faker['totals'][0] }}</span>
                        </div>
                        <div class="mr-2">
                            Views: <span class="font-medium">{{ $faker['totals'][1] }}k</span>
                        </div>
                        <div class="ml-auto">
                            Likes: <span class="font-medium">{{ $faker['totals'][2] }}k</span>
                        </div>
                    </div>
                    <div class="mt-3 flex w-full items-center">
                        <x-base.avatar
                            class="mr-3"
                            src="{{ Vite::asset($faker['photos'][0]) }}"
                        />
                        <div class="relative flex-1">
                            <x-base.input
                                class="bg-foreground/5 rounded-full pr-10"
                                type="text"
                                placeholder="Post a comment..."
                            />
                            <x-base.lucide
                                class="absolute inset-y-0 right-0 my-auto mr-3 size-4 opacity-70"
                                icon="Smile"
                            />
                        </div>
                    </div>
                </div>
            </x-base.box>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagiantion -->
        <div class="col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
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
        <!-- END: Pagiantion -->
    </div>
@endsection
