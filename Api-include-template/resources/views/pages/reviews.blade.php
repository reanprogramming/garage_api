@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Categories - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <h2 class="mt-10 text-lg font-medium">Reviews</h2>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            <div class="flex w-full sm:w-auto">
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
                <x-base.select class="box ml-2">
                    <option>Status</option>
                    <option>Waiting Payment</option>
                    <option>Confirmed</option>
                    <option>Packing</option>
                    <option>Delivered</option>
                    <option>Completed</option>
                </x-base.select>
            </div>
            <div class="mx-auto hidden opacity-70 md:block">
                Showing 1 to 10 of 150 entries
            </div>
            <div class="mt-3 flex w-full items-center xl:mt-0 xl:w-auto">
                <x-base.button class="box mr-2">
                    <x-base.lucide
                        class="size-4"
                        icon="FileText"
                    />
                    Export to
                    Excel
                </x-base.button>
                <x-base.button class="box mr-2">
                    <x-base.lucide
                        class="size-4"
                        icon="FileText"
                    />
                    Export to PDF
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
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <x-base.table
                class="-mt-2"
                boxed
            >
                <x-base.table.thead>
                    <x-base.table.tr>
                        <x-base.table.th>
                            <x-base.checkbox />
                        </x-base.table.th>
                        <x-base.table.th>PRODUCT</x-base.table.th>
                        <x-base.table.th>
                            NAME
                        </x-base.table.th>
                        <x-base.table.th>
                            RATING
                        </x-base.table.th>
                        <x-base.table.th>
                            POSTED
                        </x-base.table.th>
                        <x-base.table.th class="text-center">
                            STATUS
                        </x-base.table.th>
                        <x-base.table.th class="text-center">
                            ACTIONS
                        </x-base.table.th>
                    </x-base.table.tr>
                </x-base.table.thead>
                <x-base.table.tbody>
                    @foreach (array_slice($fakers, 0, 9) as $faker)
                        <x-base.table.tr>
                            <x-base.table.td>
                                <x-base.checkbox />
                            </x-base.table.td>
                            <x-base.table.td>
                                <div class="flex items-center">
                                    <div class="image-fit h-10 w-10">
                                        <x-base.tooltip
                                            class="rounded-lg shadow-md"
                                            src="{{ Vite::asset($faker['images'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                            as="img"
                                            content="{{ 'Uploaded at ' . $faker['dates'][0] }}"
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
                            <x-base.table.td>
                                <a
                                    class="flex items-center underline decoration-dotted"
                                    href="#"
                                >
                                    {{ $faker['users'][0]['name'] }}
                                </a>
                            </x-base.table.td>
                            <x-base.table.td>
                                <div class="flex items-center">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="fill-pending/30 text-pending mr-1 h-4 w-4"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="fill-pending/30 text-pending mr-1 h-4 w-4"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="fill-pending/30 text-pending mr-1 h-4 w-4"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="fill-pending/30 text-pending mr-1 h-4 w-4"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="fill-foreground/20 text-foreground/70 mr-1 h-4 w-4"
                                            icon="Star"
                                        />
                                    </div>
                                    <div class="ml-1 text-xs opacity-70">(4.5+)</div>
                                </div>
                            </x-base.table.td>
                            <x-base.table.td>
                                {{ $faker['formatted_times'][0] }}
                            </x-base.table.td>
                            <x-base.table.td>
                                <div @class([
                                    'flex items-center justify-center',
                                    'text-success' => $faker['true_false'][0],
                                    'text-danger' => !$faker['true_false'][0],
                                ])>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="CheckSquare"
                                    />
                                    {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                </div>
                            </x-base.table.td>
                            <x-base.table.td>
                                <div class="flex items-center justify-center">
                                    <a
                                        class="text-primary mr-5 flex items-center whitespace-nowrap"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="mr-1 h-4 w-4"
                                            icon="CheckSquare"
                                        />
                                        View Details
                                    </a>
                                </div>
                            </x-base.table.td>
                        </x-base.table.tr>
                    @endforeach
                </x-base.table.tbody>
            </x-base.table>
        </div>
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
@endsection
