@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Transaction Detail - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Transaction Details</h2>
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
                        /> Export to Excel
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
    <!-- BEGIN: Transaction Details -->
    <div class="mt-5 grid grid-cols-11 gap-5">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <x-base.box>
                <div class="mb-5 flex items-center border-b pb-5">
                    <div class="truncate text-base font-medium">
                        Transaction Details
                    </div>
                    <a
                        class="text-primary ml-auto flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Edit"
                        /> Change Status
                    </a>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Clipboard"
                    />
                    Invoice:
                    <a
                        class="ml-1 underline decoration-dotted"
                        href=""
                    >
                        INV/20220217/MPL/2053411933
                    </a>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Calendar"
                    />
                    Purchase Date: 24 March 2022
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Clock"
                    />
                    Transaction Status:
                    <x-base.badge class="ml-2 [--color:var(--color-success)]">
                        Completed
                    </x-base.badge>
                </div>
            </x-base.box>
            <x-base.box class="mt-8">
                <div class="mb-5 flex items-center border-b pb-5">
                    <div class="truncate text-base font-medium">
                        Buyer Details
                    </div>
                    <a
                        class="text-primary ml-auto flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Edit"
                        /> View Details
                    </a>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Clipboard"
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
            </x-base.box>
            <x-base.box class="mt-8">
                <div class="mb-5 flex items-center border-b pb-5">
                    <div class="truncate text-base font-medium">
                        Payment Details
                    </div>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Clipboard"
                    />
                    Payment Method:
                    <div class="ml-auto">Direct bank transfer</div>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="CreditCard"
                    />
                    Total Price (2 items):
                    <div class="ml-auto">$12,500.00</div>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="CreditCard"
                    />
                    Total Shipping Cost (800 gr):
                    <div class="ml-auto">$1,500.00</div>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="CreditCard"
                    />
                    Shipping Insurance:
                    <div class="ml-auto">$600.00</div>
                </div>
                <div class="mt-5 flex items-center border-t pt-5 font-medium">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="CreditCard"
                    />
                    Grand Total:
                    <div class="ml-auto">$15,000.00</div>
                </div>
            </x-base.box>
            <x-base.box class="mt-8">
                <div class="mb-5 flex items-center border-b pb-5">
                    <div class="truncate text-base font-medium">
                        Shipping Information
                    </div>
                    <a
                        class="text-primary ml-auto flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="MapPin"
                        /> Tracking Info
                    </a>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Clipboard"
                    />
                    Courier: Left4code Express
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="Calendar"
                    />
                    Tracking Number: 003005580322
                    <x-base.lucide
                        class="ml-2 size-4 opacity-70"
                        icon="Copy"
                    />
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 size-4 opacity-70"
                        icon="MapPin"
                    />
                    Address: 260 W. Storm Street New York, NY 10025.
                </div>
            </x-base.box>
        </div>
        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
            <x-base.box>
                <div class="mb-5 flex items-center border-b pb-5">
                    <div class="truncate text-base font-medium">
                        Order Details
                    </div>
                    <a
                        class="text-primary ml-auto flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Plus"
                        /> Add Notes
                    </a>
                </div>
                <x-base.table
                    class="-mt-3"
                    striped
                >
                    <x-base.table.thead>
                        <x-base.table.tr class="[&_th]:border-transparent [&_th]:py-5">
                            <x-base.table.th>
                                Product Name
                            </x-base.table.th>
                            <x-base.table.th class="text-right">
                                Unit Price
                            </x-base.table.th>
                            <x-base.table.th class="text-right">
                                QTY
                            </x-base.table.th>
                            <x-base.table.th class="text-right">
                                Total
                            </x-base.table.th>
                        </x-base.table.tr>
                    </x-base.table.thead>
                    <x-base.table.tbody>
                        @foreach (array_slice($fakers, 0, 8) as $faker)
                            <x-base.table.tr class="[&_td]:border-transparent [&_td]:py-3">
                                <x-base.table.td>
                                    <div class="flex items-center">
                                        <div
                                            class="border-(--color)/5 border-3 ring-(--color)/25 relative block size-11 flex-none overflow-hidden rounded-xl ring-1 [--color:var(--color-primary)]">
                                            <x-base.tooltip
                                                class="absolute top-0 size-full overflow-hidden object-cover"
                                                src="{{ Vite::asset($faker['images'][0]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                                as="img"
                                                content="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                                            />
                                        </div>
                                        <a
                                            class="ml-4 whitespace-nowrap font-medium"
                                            href=""
                                        >
                                            {{ $faker['products'][0]['name'] }}
                                        </a>
                                    </div>
                                </x-base.table.td>
                                <x-base.table.td class="text-right">
                                    ${{ $faker['totals'][0] . ',000.00' }}
                                </x-base.table.td>
                                <x-base.table.td class="text-right">2</x-base.table.td>
                                <x-base.table.td class="text-right">
                                    ${{ $faker['totals'][0] * 2 . ',000.00' }}
                                </x-base.table.td>
                            </x-base.table.tr>
                        @endforeach
                    </x-base.table.tbody>
                </x-base.table>
            </x-base.box>
        </div>
    </div>
    <!-- END: Transaction Details -->
@endsection
