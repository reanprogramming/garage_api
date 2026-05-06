@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Point of Sale - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div>
        <div class="mt-8 flex flex-col items-center sm:flex-row">
            <h2 class="mr-auto text-lg font-medium">Point of Sale</h2>
            <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
                <x-base.button
                    class="box mr-2"
                    data-tw-toggle="modal"
                    data-tw-target="#new-order-dialog"
                    href="#"
                    as="a"
                    variant="primary"
                >
                    New Order
                </x-base.button>
                <x-base.dropdown-menu class="ml-auto sm:ml-0">
                    <x-base.dropdown-menu.trigger
                        class="box px-2"
                        as="x-base.button"
                    >
                        <span class="flex size-5 items-center justify-center">
                            <x-base.lucide
                                class="size-4"
                                icon="ChevronDown"
                            />
                        </span>
                    </x-base.dropdown-menu.trigger>
                    <x-base.dropdown-menu.content>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Activity"
                            />
                            <span class="truncate">
                                INV-0206020 - {{ $fakers[3]['users'][0]['name'] }}
                            </span>
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Activity"
                            />
                            <span class="truncate">
                                INV-0206022 - {{ $fakers[4]['users'][0]['name'] }}
                            </span>
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Activity"
                            />
                            <span class="truncate">
                                INV-0206021 - {{ $fakers[5]['users'][0]['name'] }}
                            </span>
                        </x-base.dropdown-menu.item>
                    </x-base.dropdown-menu.content>
                </x-base.dropdown-menu>
            </div>
        </div>
        <div class="mt-5 grid grid-cols-12 gap-5">
            <!-- BEGIN: Item List -->
            <div class="col-span-12 lg:col-span-8">
                <div class="lg:flex">
                    <div class="relative">
                        <x-base.input
                            class="box w-full px-4 py-3 pr-10 lg:w-64"
                            type="text"
                            placeholder="Search item..."
                        />
                        <x-base.lucide
                            class="absolute inset-y-0 right-0 my-auto mr-3 size-4 opacity-70"
                            icon="Search"
                        />
                    </div>
                    <x-base.select class="box ml-auto mt-3 w-full lg:mt-0 lg:w-auto">
                        <option>Sort By</option>
                        <option>A to Z</option>
                        <option>Z to A</option>
                        <option>Lowest Price</option>
                        <option>Highest Price</option>
                    </x-base.select>
                </div>
                <div class="mt-5 grid grid-cols-12 gap-x-5 gap-y-8">
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Soup</div>
                        <div class="mt-1 text-xs opacity-70">5 Items</div>
                    </x-base.box>
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3 active',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Pancake & Toast</div>
                        <div class="mt-1 text-xs opacity-70">8 Items</div>
                    </x-base.box>
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Pasta</div>
                        <div class="mt-1 text-xs opacity-70">4 Items</div>
                    </x-base.box>
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Waffle</div>
                        <div class="mt-1 text-xs opacity-70">3 Items</div>
                    </x-base.box>
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Snacks</div>
                        <div class="mt-1 text-xs opacity-70">8 Items</div>
                    </x-base.box>
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Deserts</div>
                        <div class="mt-1 text-xs opacity-70">8 Items</div>
                    </x-base.box>
                    <x-base.box @class([
                        'col-span-12 cursor-pointer sm:col-span-4 2xl:col-span-3',
                        '[&.active]:text-(--color) [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 [--color:var(--color-primary)]',
                    ])>
                        <div class="text-base font-medium">Beverage</div>
                        <div class="mt-1 text-xs opacity-70">9 Items</div>
                    </x-base.box>
                </div>
                <div class="mt-10 grid grid-cols-12 gap-x-5 gap-y-8 border-t pt-5">
                    @foreach (array_slice($fakers, 0, 8) as $faker)
                        <a
                            class="col-span-12 block sm:col-span-4 2xl:col-span-3"
                            data-tw-toggle="modal"
                            data-tw-target="#add-item-dialog"
                            href="#"
                        >
                            <x-base.box class="relative p-3">
                                <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                                    <div class="image-fit absolute left-0 top-0 h-full w-full">
                                        <img
                                            class="rounded-lg"
                                            src="{{ Vite::asset($faker['foods'][0]['image']) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                </div>
                                <div class="mt-3 block truncate text-center font-medium">
                                    {{ $faker['foods'][0]['name'] }}
                                </div>
                            </x-base.box>
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- END: Item List -->
            <!-- BEGIN: Ticket -->
            <x-base.tabs class="col-span-12 lg:col-span-4">
                <x-base.box class="p-4">
                    <x-base.tabs.list class="m-0">
                        <x-base.tabs.trigger>Ticket</x-base.tabs.trigger>
                        <x-base.tabs.trigger>Details</x-base.tabs.trigger>
                    </x-base.tabs.list>
                </x-base.box>
                <x-base.tabs.contents>
                    <x-base.tabs.content class="mt-8 space-y-8">
                        <x-base.box class="p-2">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <a
                                    class="hover:bg-foreground/5 flex cursor-pointer items-center rounded-lg px-4 py-3 transition duration-300 ease-in-out"
                                    data-tw-toggle="modal"
                                    data-tw-target="#add-item-dialog"
                                    href="#"
                                >
                                    <div class="mr-1 max-w-[50%] truncate">
                                        {{ $faker['foods'][0]['name'] }}
                                    </div>
                                    <div class="opacity-70">x 1</div>
                                    <x-base.lucide
                                        class="ml-2 size-4 opacity-70"
                                        icon="Edit"
                                    />
                                    <div class="ml-auto font-medium">
                                        ${{ $faker['totals'][0] }}
                                    </div>
                                </a>
                            @endforeach
                        </x-base.box>
                        <x-base.box>
                            <div class="flex gap-2">
                                <x-base.input
                                    class="bg-foreground/[.03]"
                                    type="text"
                                    placeholder="Use coupon code..."
                                />
                                <x-base.button variant="primary">
                                    Apply
                                </x-base.button>
                            </div>
                        </x-base.box>
                        <x-base.box>
                            <div class="flex">
                                <div class="mr-auto">Subtotal</div>
                                <div class="font-medium">$250</div>
                            </div>
                            <div class="mt-4 flex">
                                <div class="mr-auto">Discount</div>
                                <div class="text-danger font-medium">-$20</div>
                            </div>
                            <div class="mt-4 flex">
                                <div class="mr-auto">Tax</div>
                                <div class="font-medium">15%</div>
                            </div>
                            <div class="mt-4 flex border-t pt-4">
                                <div class="mr-auto text-base font-medium">
                                    Total Charge
                                </div>
                                <div class="text-base font-medium">$220</div>
                            </div>
                        </x-base.box>
                        <div>
                            <x-base.button
                                class="box ml-auto w-full"
                                variant="primary"
                            >
                                Charge
                            </x-base.button>
                            <x-base.button class="box mt-3 w-full">
                                Clear Items
                            </x-base.button>
                        </div>
                    </x-base.tabs.content>
                    <x-base.tabs.content class="mt-8">
                        <x-base.box>
                            <div class="flex items-center border-b pb-5">
                                <div>
                                    <div class="opacity-70">Time</div>
                                    <div class="mt-1">02/06/20 02:10 PM</div>
                                </div>
                                <x-base.lucide
                                    class="ml-auto size-4 opacity-70"
                                    icon="Clock"
                                />
                            </div>
                            <div class="flex items-center border-b py-5">
                                <div>
                                    <div class="opacity-70">Customer</div>
                                    <div class="mt-1">{{ $fakers[0]['users'][0]['name'] }}</div>
                                </div>
                                <x-base.lucide
                                    class="ml-auto size-4 opacity-70"
                                    icon="User"
                                />
                            </div>
                            <div class="flex items-center border-b py-5">
                                <div>
                                    <div class="opacity-70">People</div>
                                    <div class="mt-1">3</div>
                                </div>
                                <x-base.lucide
                                    class="ml-auto size-4 opacity-70"
                                    icon="Users"
                                />
                            </div>
                            <div class="flex items-center pt-5">
                                <div>
                                    <div class="opacity-70">Table</div>
                                    <div class="mt-1">21</div>
                                </div>
                                <x-base.lucide
                                    class="ml-auto size-4 opacity-70"
                                    icon="Mic"
                                />
                            </div>
                        </x-base.box>
                    </x-base.tabs.content>
                </x-base.tabs.contents>
            </x-base.tabs>
            <!-- END: Ticket -->
        </div>
        <!-- BEGIN: New Order Modal -->
        <x-base.dialog id="new-order-dialog">
            <x-base.dialog.header>
                <x-base.dialog.title>New Order</x-base.dialog.title>
                <x-base.dialog.description>Enter the details of the new product to add it to your inventory. Ensure that all
                    required fields are filled correctly.</x-base.dialog.description>
            </x-base.dialog.header>
            <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                <x-base.form.item class="col-span-12">
                    <x-base.label for="pos-form-1">Name</x-base.label>
                    <x-base.input
                        id="pos-form-1"
                        type="text"
                        placeholder="Customer name"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12">
                    <x-base.label for="pos-form-2">Table</x-base.label>
                    <x-base.input
                        id="pos-form-2"
                        type="text"
                        placeholder="Customer table"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12">
                    <x-base.label for="pos-form-3">Number of People</x-base.label>
                    <x-base.input
                        id="pos-form-3"
                        type="text"
                        placeholder="People"
                    />
                </x-base.form.item>
            </div>
            <x-base.dialog.footer>
                <x-base.button
                    data-tw-dismiss="modal"
                    type="button"
                >
                    Cancel
                </x-base.button>
                <x-base.button
                    type="button"
                    variant="primary"
                >
                    Create Ticket
                </x-base.button>
            </x-base.dialog.footer>
        </x-base.dialog>
        <!-- END: New Order Modal -->
        <!-- BEGIN: Add Item Modal -->
        <x-base.dialog id="add-item-dialog">
            <x-base.dialog.header>
                <x-base.dialog.title>{{ $fakers[0]['foods'][0]['name'] }}</x-base.dialog.title>
                <x-base.dialog.description>Fill in the details to add a new product to your inventory. Adjust the initial
                    stock quantity as needed to ensure accurate tracking.
                </x-base.dialog.description>
            </x-base.dialog.header>
            <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                <x-base.form.item class="col-span-12">
                    <x-base.label for="pos-form-4">
                        Quantity
                    </x-base.label>
                    <div class="flex flex-1 gap-1">
                        <x-base.button
                            class="w-12"
                            type="button"
                        >
                            -
                        </x-base.button>
                        <x-base.input
                            class="w-24 text-center"
                            id="pos-form-4"
                            type="text"
                            value="2"
                            placeholder="Item quantity"
                        />
                        <x-base.button
                            class="w-12"
                            type="button"
                        >
                            +
                        </x-base.button>
                    </div>
                </x-base.form.item>
                <x-base.form.item class="col-span-12">
                    <x-base.label for="pos-form-5">Notes</x-base.label>
                    <x-base.textarea
                        id="pos-form-5"
                        placeholder="Item notes"
                    ></x-base.textarea>
                </x-base.form.item>
            </div>
            <x-base.dialog.footer>
                <x-base.button
                    data-tw-dismiss="modal"
                    type="button"
                >
                    Cancel
                </x-base.button>
                <x-base.button
                    type="button"
                    variant="primary"
                >
                    Add Item
                </x-base.button>
            </x-base.dialog.footer>
        </x-base.dialog>
        <!-- END: Add Item Modal -->
    </div>
@endsection
