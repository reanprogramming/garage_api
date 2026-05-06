@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Users Layout - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <h2 class="mt-10 text-lg font-medium">Users Layout</h2>
    <div class="mt-5 grid grid-cols-12 gap-x-6 gap-y-8">
        <div class="col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            <x-base.button
                class="box mr-2"
                variant="primary"
            >
                Add New User
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
                            icon="Users"
                        /> Add Group
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="MessageCircle"
                        /> Send
                        Message
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
            <div class="mx-auto hidden opacity-70 md:block">
                Showing 1 to 10 of 150 entries
            </div>
            <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                <div class="relative w-56">
                    <x-base.input
                        class="box w-56 pr-10"
                        type="text"
                        placeholder="Search..."
                    />
                    <x-base.lucide
                        class="absolute inset-y-0 right-0 my-auto mr-3 size-4 opacity-70"
                        icon="Search"
                    />
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach ($fakers as $faker)
            <div class="col-span-12 md:col-span-6">
                <x-base.box>
                    <div class="flex flex-col items-center lg:flex-row">
                        <x-base.avatar
                            class="size-24 lg:mr-1 lg:size-12"
                            src="{{ Vite::asset($faker['images'][2]) }}"
                            title="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                        />
                        <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:mt-0 lg:text-left">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $faker['users'][0]['name'] }}
                            </a>
                            <div class="mt-0.5 text-xs opacity-70">
                                {{ $faker['jobs'][0] }}
                            </div>
                        </div>
                        <div class="mt-4 flex lg:mt-0">
                            <x-base.button
                                class="mr-2"
                                size="sm"
                            >
                                View Profile
                            </x-base.button>
                            <x-base.button
                                variant="primary"
                                size="sm"
                            >
                                Message
                            </x-base.button>

                        </div>
                    </div>
                </x-base.box>
            </div>
        @endforeach
        <!-- BEGIN: Users Layout -->
        <!-- BEGIN: Pagination -->
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
        <!-- END: Pagination -->
    </div>
@endsection
