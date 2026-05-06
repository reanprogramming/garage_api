@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Categories - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div>
        <h2 class="mt-10 text-lg font-medium">Product List</h2>
        <div class="mt-5 grid grid-cols-12 gap-x-6 gap-y-8">
            <div class="col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                <x-base.button
                    class="box mr-2"
                    variant="primary"
                >
                    Add New Product
                </x-base.button>
                <x-base.dropdown-menu>
                    <x-base.dropdown-menu.trigger
                        class="box px-2"
                        as="x-base.button"
                    >
                        <span class="flex h-5 w-5 items-center justify-center">
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
                                icon="Printer"
                            /> Print
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="FileText"
                            /> Export to Excel
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="FileText"
                            /> Export to PDF
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
                            class="absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"
                            icon="Search"
                        />
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            @foreach (array_slice($fakers, 0, 12) as $faker)
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <x-base.box class="p-0">
                        <div class="p-5">
                            <div
                                class="image-fit h-40 overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black before:to-black/10 2xl:h-56">
                                <img
                                    class="rounded-lg"
                                    src="{{ Vite::asset($faker['images'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                                @if ($faker['true_false'][0])
                                    <x-base.badge
                                        class="border-(--color-pending) bg-(--color-pending)/70 absolute top-0 z-10 m-5 text-white [--color:var(--color-pending)]"
                                    >
                                        Featured
                                    </x-base.badge>
                                @endif
                                <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                                    <a
                                        class="block text-base font-medium"
                                        href=""
                                    >
                                        {{ $faker['products'][0]['name'] }}
                                    </a>
                                    <span class="mt-3 text-xs opacity-70">
                                        {{ $faker['products'][0]['category'] }}
                                    </span>
                                </div>
                            </div>
                            <div class="mt-5 opacity-70">
                                <div class="flex items-center">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Link"
                                    /> Price: $
                                    {{ $faker['totals'][0] }}
                                </div>
                                <div class="mt-2 flex items-center">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Layers"
                                    /> Remaining
                                    Stock:
                                    {{ $faker['stocks'][0] }}
                                </div>
                                <div class="mt-2 flex items-center">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="CheckSquare"
                                    />
                                    Status:
                                    {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center border-t p-5 lg:justify-end">
                            <a
                                class="text-primary mr-auto flex items-center"
                                href="#"
                            >
                                <x-base.lucide
                                    class="mr-1 h-4 w-4"
                                    icon="Eye"
                                /> Preview
                            </a>
                            <a
                                class="mr-3 flex items-center"
                                href="#"
                            >
                                <x-base.lucide
                                    class="mr-1 h-4 w-4"
                                    icon="CheckSquare"
                                /> Edit
                            </a>
                            <a
                                class="text-danger flex items-center"
                                data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-dialog"
                                href="#"
                            >
                                <x-base.lucide
                                    class="mr-1 h-4 w-4"
                                    icon="Trash"
                                /> Delete
                            </a>
                        </div>
                    </x-base.box>
                </div>
            @endforeach
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
                    <x-base.pagination.link>
                        <x-base.lucide icon="ChevronsLeft" />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide icon="ChevronLeft" />
                    </x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>1</x-base.pagination.link>
                    <x-base.pagination.link active>2</x-base.pagination.link>
                    <x-base.pagination.link>3</x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide icon="ChevronRight" />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide icon="ChevronsRight" />
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
        <!-- BEGIN: Delete Confirmation Modal -->
        <x-base.dialog id="delete-confirmation-dialog">
            <div class="p-5 text-center">
                <x-base.lucide
                    class="text-danger mx-auto mt-3 size-16 stroke-1"
                    icon="CircleX"
                />
                <div class="mt-5 text-2xl font-medium">Are you sure?</div>
                <div class="mt-2 opacity-70">
                    Do you really want to delete these records? <br />
                    This process cannot be undone.
                </div>
            </div>
            <div class="px-5 pb-8 text-center">
                <x-base.button
                    class="mr-1 w-24"
                    data-tw-dismiss="modal"
                    type="button"
                >
                    Cancel
                </x-base.button>
                <x-base.button
                    class="w-24"
                    type="button"
                    variant="danger"
                >
                    Delete
                </x-base.button>
            </div>
        </x-base.dialog>
        <!-- END: Delete Confirmation Modal -->
    </div>
@endsection
