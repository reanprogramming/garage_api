@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Seller Detail - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div>
        <div class="mt-8 flex flex-col items-center sm:flex-row">
            <h2 class="mr-auto text-lg font-medium">Seller Details</h2>
            <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
                <x-base.button
                    class="box mr-2"
                    variant="primary"
                >
                    Print
                </x-base.button>
                <x-base.dropdown-menu class="ml-auto sm:ml-0">
                    <x-base.dropdown-menu.trigger
                        class="box px-2"
                        as="x-base.button"
                    >
                        <span class="flex h-5 w-5 items-center justify-center">
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
                                icon="Printer"
                            /> Print
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Export to Word
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Export to PDF
                        </x-base.dropdown-menu.item>
                    </x-base.dropdown-menu.content>
                </x-base.dropdown-menu>
            </div>
        </div>
        <!-- BEGIN: Seller Details -->
        <div class="mt-5 grid grid-cols-11 gap-5">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <x-base.box>
                    <div class="mb-5 flex items-center border-b pb-5">
                        <div class="truncate text-base font-medium">User Details</div>
                        <a
                            class="text-primary ml-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Edit"
                            /> More Details
                        </a>
                    </div>
                    <div class="flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Clipboard"
                        />
                        Unique ID:
                        <a
                            class="ml-1 underline decoration-dotted"
                            href=""
                        >
                            SLR-20220217-2053411933
                        </a>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="User"
                        />
                        Name:
                        <a
                            class="ml-1 underline decoration-dotted"
                            href=""
                        >
                            {{ $fakers[0]['users'][0]['name'] }}
                        </a>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Calendar"
                        />
                        Phone Number: +71828273732
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="MapPin"
                        />
                        Address: 260 W. Storm Street New York, NY 10025.
                    </div>
                    <div class="mt-5 flex items-center border-t pt-5 font-medium">
                        <x-base.button
                            class="w-full px-2 py-1"
                            type="button"
                        >
                            Message User
                        </x-base.button>
                    </div>
                </x-base.box>
                <x-base.box class="mt-8">
                    <div class="mb-5 flex items-center border-b pb-5">
                        <div class="truncate text-base font-medium">
                            Store Details
                        </div>
                        <a
                            class="text-primary ml-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Edit"
                            /> More Details
                        </a>
                    </div>
                    <div class="flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Clipboard"
                        />
                        Unique ID:
                        <a
                            class="ml-1 underline decoration-dotted"
                            href=""
                        >
                            STR-2053411933-20220217
                        </a>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="ShoppingBag"
                        />
                        Name:
                        <a
                            class="ml-1 underline decoration-dotted"
                            href=""
                        >
                            Themeforest
                        </a>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Calendar"
                        />
                        Phone Number: +71828273732
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="MapPin"
                        />
                        Address: 260 W. Storm Street New York, NY 10025.
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Calendar"
                        />
                        Status:
                        <x-base.badge class="ml-2 [--color:var(--color-success)]">
                            Active
                        </x-base.badge>
                    </div>
                    <div class="mt-5 flex items-center border-t pt-5 font-medium">
                        <x-base.button
                            class="w-full px-2 py-1"
                            type="button"
                        >
                            Change Status
                        </x-base.button>
                    </div>
                </x-base.box>
                <x-base.box class="mt-8">
                    <div class="mb-5 flex items-center border-b pb-5">
                        <div class="truncate text-base font-medium">
                            Transaction Reports
                        </div>
                        <a
                            class="text-primary ml-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Edit"
                            /> More Details
                        </a>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Clipboard"
                        />
                        Avg. Daily Transactions:
                        <div class="ml-auto">$1,500.00</div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Clipboard"
                        />
                        Avg. Monthly Transactions:
                        <div class="ml-auto">$42,500.00</div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Clipboard"
                        />
                        Avg. Annually Transactions:
                        <div class="ml-auto">$1,012,500.00</div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Star"
                        />
                        Average Rating:
                        <div class="ml-auto">4.9+</div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Album"
                        />
                        Total Products:
                        <div class="ml-auto">7,120</div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Archive"
                        />
                        Total Transactions:
                        <div class="ml-auto">1.512.001</div>
                    </div>
                    <div class="mt-3 flex items-center">
                        <x-base.lucide
                            class="mr-2 size-4 opacity-70"
                            icon="Monitor"
                        />
                        Active Disputes:
                        <div class="ml-auto">1</div>
                    </div>
                </x-base.box>
            </div>
            <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
                <div class="grid grid-cols-12 gap-x-5 gap-y-8">
                    @foreach (array_slice($fakers, 0, 9) as $faker)
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-4">
                            <x-base.box class="p-0">
                                <div class="p-5">
                                    <div
                                        class="image-fit h-40 overflow-hidden rounded-xl before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black before:to-black/10 2xl:h-56">
                                        <img
                                            class="rounded-xl"
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
                                            <span class="mt-3 text-xs text-white/90">
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
                                            />
                                            Remaining Stock:
                                            {{ $faker['stocks'][0] }}
                                        </div>
                                        <div class="mt-2 flex items-center">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="CheckSquare"
                                            />
                                            Status: {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
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
                                        />
                                        Edit
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
                </div>
                <!-- BEGIN: Pagination -->
                <div class="col-span-11 mt-6 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
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
        </div>
        <!-- END: Seller Details -->
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
