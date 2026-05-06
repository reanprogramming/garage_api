@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Invoice Layout - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Invoice Layout</h2>
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
                        /> Export Word
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="File"
                        /> Export PDF
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <x-base.box class="mt-5">
        <div @class([
            'bg-primary/[.01] border-primary/20 relative overflow-hidden rounded-xl border text-center sm:text-left',
            'before:bg-noise before:absolute before:inset-0 before:opacity-30',
            'after:bg-accent after:absolute after:inset-0 after:opacity-30 after:blur-2xl',
        ])>
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-primary text-2xl font-semibold">INVOICE</div>
                <div class="mt-2">
                    Receipt <span class="font-medium">#1923195</span>
                </div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
            <div class="flex flex-col px-5 pb-10 pt-10 sm:px-20 sm:pb-20 lg:flex-row">
                <div>
                    <div class="text-base opacity-70">Client Details</div>
                    <div class="text-primary mt-2 text-lg font-medium">
                        Arnold Schwarzenegger
                    </div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">
                        260 W. Storm Street New York, NY 10025.
                    </div>
                </div>
                <div class="mt-10 lg:ml-auto lg:mt-0 lg:text-right">
                    <div class="text-base opacity-70">Payment to</div>
                    <div class="text-primary mt-2 text-lg font-medium">
                        Left4code
                    </div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="px-5 py-10 sm:px-16 sm:py-20">
            <x-base.table>
                <x-base.table.thead>
                    <x-base.table.tr>
                        <x-base.table.th class="whitespace-nowrap border-none pb-6">
                            DESCRIPTION
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-none pb-6 text-right">
                            QTY
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-none pb-6 text-right">
                            PRICE
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-none pb-6 text-right">
                            SUBTOTAL
                        </x-base.table.th>
                    </x-base.table.tr>
                </x-base.table.thead>
                <x-base.table.tbody>
                    <x-base.table.tr>
                        <x-base.table.td>
                            <div class="whitespace-nowrap font-medium">
                                Midone - Tailwind Admin Dashboard Template
                            </div>
                            <div class="mt-0.5 whitespace-nowrap text-sm opacity-70">
                                Regular License
                            </div>
                        </x-base.table.td>
                        <x-base.table.td class="text-right">
                            2
                        </x-base.table.td>
                        <x-base.table.td class="text-right">
                            $25
                        </x-base.table.td>
                        <x-base.table.td class="text-right font-medium">
                            $50
                        </x-base.table.td>
                    </x-base.table.tr>
                    <x-base.table.tr>
                        <x-base.table.td>
                            <div class="whitespace-nowrap font-medium">
                                Vuejs Admin Template
                            </div>
                            <div class="mt-0.5 whitespace-nowrap text-sm opacity-70">
                                Regular License
                            </div>
                        </x-base.table.td>
                        <x-base.table.td class="text-right">
                            1
                        </x-base.table.td>
                        <x-base.table.td class="text-right">
                            $25
                        </x-base.table.td>
                        <x-base.table.td class="text-right font-medium">
                            $25
                        </x-base.table.td>
                    </x-base.table.tr>
                    <x-base.table.tr>
                        <x-base.table.td>
                            <div class="whitespace-nowrap font-medium">
                                React Admin Template
                            </div>
                            <div class="mt-0.5 whitespace-nowrap text-sm opacity-70">
                                Regular License
                            </div>
                        </x-base.table.td>
                        <x-base.table.td class="text-right">
                            1
                        </x-base.table.td>
                        <x-base.table.td class="text-right">
                            $25
                        </x-base.table.td>
                        <x-base.table.td class="text-right font-medium">
                            $25
                        </x-base.table.td>
                    </x-base.table.tr>
                    <x-base.table.tr>
                        <x-base.table.td>
                            <div class="whitespace-nowrap font-medium">
                                Laravel Admin Template
                            </div>
                            <div class="mt-0.5 whitespace-nowrap text-sm opacity-70">
                                Regular License
                            </div>
                        </x-base.table.td>
                        <x-base.table.td class="text-right">3</x-base.table.td>
                        <x-base.table.td class="text-right">$25</x-base.table.td>
                        <x-base.table.td class="text-right font-medium">
                            $75
                        </x-base.table.td>
                    </x-base.table.tr>
                </x-base.table.tbody>
            </x-base.table>
        </div>
        <div class="flex flex-col-reverse px-5 pb-10 sm:flex-row sm:px-20 sm:pb-20">
            <div class="mt-10 text-center sm:mt-0 sm:text-left">
                <div class="text-base opacity-70">Bank Transfer</div>
                <div class="text-primary mt-2 text-lg font-medium">
                    Elon Musk
                </div>
                <div class="mt-1 opacity-70">Bank Account : 098347234832</div>
                <div class="mt-1 opacity-70">Code : LFT133243</div>
            </div>
            <div class="text-center sm:ml-auto sm:text-right">
                <div class="text-base opacity-70">Total Amount</div>
                <div class="text-primary mt-2 text-xl font-medium">
                    $20.600.00
                </div>
                <div class="mt-1 opacity-70">Taxes included</div>
            </div>
        </div>
    </x-base.box>
    <!-- END: Invoice -->
@endsection
