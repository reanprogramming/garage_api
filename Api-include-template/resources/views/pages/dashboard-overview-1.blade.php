@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
   <title>{{ env('APP_NAME') }}</title>
@endsection

@section('subcontent')
    <div>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="flex h-10 items-center">
                            <h2 class="me-5 truncate text-lg font-medium">General Report</h2>
                            <a
                                class="text-primary ms-auto flex items-center gap-3"
                                href=""
                            >
                                <x-base.lucide icon="RefreshCcw" /> Refresh
                            </a>
                        </div>
                        <div class="mt-5 grid grid-cols-12 gap-6">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                <x-base.box>
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-7 w-7 stroke-1 drop-shadow [--color:var(--color-primary)]"
                                            icon="CircleGauge"
                                        />
                                        <div class="ms-auto">
                                            <x-base.tooltip
                                                class="pl-2 pr-1 [--color:var(--color-success)]"
                                                as="x-base.badge"
                                                content="12% Higher than last month"
                                            >
                                                12%
                                                <x-base.lucide
                                                    class="ms-0.5"
                                                    icon="ChevronUp"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-8">$724,091.47</div>
                                    <div class="mt-1.5 text-xs uppercase opacity-70">Item Sales</div>
                                </x-base.box>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                <x-base.box>
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-7 w-7 stroke-1 [--color:var(--color-pending)]"
                                            icon="PanelBottomClose"
                                        />
                                        <div class="ms-auto">
                                            <x-base.tooltip
                                                class="pl-2 pr-1 [--color:var(--color-success)]"
                                                as="x-base.badge"
                                                content="9% Higher than last month"
                                            >
                                                9%
                                                <x-base.lucide
                                                    class="ms-0.5"
                                                    icon="ChevronUp"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-8">21,546</div>
                                    <div class="mt-1.5 text-xs uppercase opacity-70">New Orders</div>
                                </x-base.box>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                <x-base.box>
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-7 w-7 stroke-1 [--color:var(--color-warning)]"
                                            icon="Disc3"
                                        />
                                        <div class="ms-auto">
                                            <x-base.tooltip
                                                class="pl-2 pr-1 [--color:var(--color-danger)]"
                                                as="x-base.badge"
                                                content="7% Lower than last month"
                                            >
                                                7%
                                                <x-base.lucide
                                                    class="ms-0.5"
                                                    icon="ChevronDown"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-8">1,524,091</div>
                                    <div class="mt-1.5 text-xs uppercase opacity-70">Total Products</div>
                                </x-base.box>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                <x-base.box>
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-7 w-7 stroke-1 [--color:var(--color-danger)]"
                                            icon="Album"
                                        />
                                        <div class="ms-auto">
                                            <x-base.tooltip
                                                class="pl-2 pr-1 [--color:var(--color-success)]"
                                                as="x-base.badge"
                                                content="41% Higher than last month"
                                            >
                                                41%
                                                <x-base.lucide
                                                    class="ms-0.5"
                                                    icon="ChevronUp"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-8">42,924,091</div>
                                    <div class="mt-1.5 text-xs uppercase opacity-70">Unique Visitors</div>
                                </x-base.box>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 mt-8 lg:col-span-6">
                        <div class="block h-10 items-center sm:flex">
                            <h2 class="me-5 truncate text-lg font-medium">Sales Report</h2>
                            <div class="relative mt-3 sm:ms-auto sm:mt-0">
                                <x-base.lucide
                                    class="[--color:var(--color-foreground)]/50 absolute inset-y-0 start-0 z-10 my-auto ms-4"
                                    icon="Calendar"
                                />
                                <x-base.easepick
                                    class="box pl-11 sm:w-64"
                                    type="text"
                                    config="{
                                multipleMode: true
                            }"
                                />
                            </div>
                        </div>
                        <x-base.box class="mt-12 p-5 sm:mt-5">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-lg font-medium">
                                            $24,100,21
                                        </div>
                                        <div class="mt-1.5 text-xs uppercase opacity-70">This Month</div>
                                    </div>
                                    <div class="border-foreground/20 mx-4 h-12 w-px border border-r border-dotted xl:mx-6">
                                    </div>
                                    <div class="text-foreground/80">
                                        <div class="text-lg font-medium">
                                            $21,023,01
                                        </div>
                                        <div class="mt-1.5 text-xs uppercase opacity-70">Last Month</div>
                                    </div>
                                </div>
                                <x-base.dropdown-menu class="mt-5 md:ms-auto md:mt-0">
                                    <x-base.dropdown-menu.trigger
                                        class="font-normal"
                                        as="x-base.button"
                                    >
                                        Filter by Category
                                        <x-base.lucide
                                            class="ms-2"
                                            icon="ChevronDown"
                                        />
                                    </x-base.dropdown-menu.trigger>
                                    <x-base.dropdown-menu.content class="h-36 overflow-y-auto">
                                        <x-base.dropdown-menu.item>PC & Laptop</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Smartphone</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Electronic</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Photography</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Sport</x-base.dropdown-menu.item>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                            <div @class([
                                'relative',
                                'before:content-[\'\'] before:block before:absolute before:w-16 before:start-0 before:top-0 before:bottom-0 before:ms-11 before:mb-7 before:bg-gradient-to-r before:from-background before:via-background/80 before:to-transparent',
                                'after:content-[\'\'] after:block after:absolute after:w-16 after:end-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-background after:via-background/80 after:to-transparent',
                            ])>
                                <x-report-line-chart
                                    class="-mb-6 mt-6"
                                    height="h-[275px]"
                                />
                            </div>
                        </x-base.box>
                    </div>
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Weekly Top Seller -->
                    <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                        <div class="flex h-10 items-center">
                            <h2 class="me-5 truncate text-lg font-medium">Weekly Top Seller</h2>
                            <a
                                class="text-primary ms-auto truncate"
                                href=""
                            > Show More </a>
                        </div>
                        <x-base.box class="mt-5 p-5">
                            <div class="mt-3">
                                <x-report-pie-chart height="h-[213px]" />
                            </div>
                            <div class="mx-auto mt-8 w-52 sm:w-auto">
                                <div class="flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                    </div>
                                    <span class="truncate">17 - 30 Years old</span>
                                    <span class="ms-auto">62%</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-pending)]">
                                    </div>
                                    <span class="truncate">31 - 50 Years old</span>
                                    <span class="ms-auto">33%</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-warning)]">
                                    </div>
                                    <span class="truncate">&gt;= 50 Years old</span>
                                    <span class="ms-auto">10%</span>
                                </div>
                            </div>
                        </x-base.box>
                    </div>
                    <!-- END: Weekly Top Seller -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                        <div class="flex h-10 items-center">
                            <h2 class="me-5 truncate text-lg font-medium">Sales Report</h2>
                            <a
                                class="text-primary ms-auto truncate"
                                href=""
                            > Show More </a>
                        </div>
                        <x-base.box class="mt-5 p-5">
                            <div class="mt-3">
                                <x-report-donut-chart height="h-[213px]" />
                            </div>
                            <div class="mx-auto mt-8 w-52 sm:w-auto">
                                <div class="flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                    </div>
                                    <span class="truncate">17 - 30 Years old</span>
                                    <span class="ms-auto">62%</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-pending)]">
                                    </div>
                                    <span class="truncate">31 - 50 Years old</span>
                                    <span class="ms-auto">33%</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div
                                        class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-warning)]">
                                    </div>
                                    <span class="truncate">&gt;= 50 Years old</span>
                                    <span class="ms-auto">10%</span>
                                </div>
                            </div>
                        </x-base.box>
                    </div>
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Official Store -->
                    <div class="col-span-12 mt-6 xl:col-span-8">
                        <div class="block h-10 items-center sm:flex">
                            <h2 class="me-5 truncate text-lg font-medium">Official Store</h2>
                            <div class="relative mt-3 sm:ms-auto sm:mt-0">
                                <x-base.lucide
                                    class="[--color:var(--color-foreground)]/50 absolute inset-y-0 start-0 z-10 my-auto ms-3"
                                    icon="MapPin"
                                />
                                <x-base.input
                                    class="box pl-10 sm:w-56"
                                    type="text"
                                    placeholder="Filter by city"
                                />
                            </div>
                        </div>
                        <x-base.box class="mt-12 p-5 sm:mt-5">
                            <div>
                                250 Official stores in 21 countries, click the marker to see
                                location details.
                            </div>
                            <x-vector-map class="mt-5 h-[310px]" />
                        </x-base.box>
                    </div>
                    <!-- END: Official Store -->
                    <!-- BEGIN: Weekly Best Sellers -->
                    <div class="col-span-12 mt-6 xl:col-span-4">
                        <div class="flex h-10 items-center">
                            <h2 class="me-5 truncate text-lg font-medium">
                                Weekly Best Sellers
                            </h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                <x-base.box class="mb-3 flex items-center px-4 py-4 before:hidden">
                                    <x-base.avatar
                                        class="rounded-xl"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                    />
                                    <div class="me-auto ms-4">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-foreground/70 mt-1 text-xs">
                                            {{ $faker['dates'][0] }}
                                        </div>
                                    </div>
                                    <x-base.badge class="[--color:var(--color-success)]">137 Sales</x-base.badge>
                                </x-base.box>
                            @endforeach
                            <x-base.button class="box h-12 w-full border-dotted">View More</x-base.button>
                        </div>
                    </div>
                    <!-- END: Weekly Best Sellers -->
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8 grid grid-cols-12 gap-6">
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                            <x-base.box class="p-5">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="truncate text-lg font-medium">Target Sales</div>
                                        <div class="mt-1 opacity-70">300 Sales</div>
                                    </div>
                                    <div class="relative ms-auto flex-none">
                                        <x-report-donut-chart-1
                                            width="w-[90px]"
                                            height="h-[90px]"
                                        />
                                        <div
                                            class="absolute start-0 top-0 flex h-full w-full items-center justify-center font-medium">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </x-base.box>
                        </div>
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                            <x-base.box class="p-5">
                                <div class="flex items-center">
                                    <div class="me-3 truncate text-lg font-medium">
                                        Social Media
                                    </div>
                                    <x-base.badge class="bg-(--color)/10 border-(--color)/40 ms-auto whitespace-nowrap">137
                                        Sales</x-base.badge>
                                </div>
                                <div class="mt-1">
                                    <x-simple-line-chart-1
                                        class="-ms-1"
                                        height="h-[58px]"
                                    />
                                </div>
                            </x-base.box>
                        </div>
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                            <x-base.box class="p-5">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="truncate text-lg font-medium">New Products</div>
                                        <div class="mt-1 opacity-70">1450 Products</div>
                                    </div>
                                    <div class="relative ms-auto flex-none">
                                        <x-report-donut-chart-1
                                            width="w-[90px]"
                                            height="h-[90px]"
                                        />
                                        <div
                                            class="absolute start-0 top-0 flex h-full w-full items-center justify-center font-medium">
                                            45%
                                        </div>
                                    </div>
                                </div>
                            </x-base.box>
                        </div>
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                            <x-base.box class="p-5">
                                <div class="flex items-center">
                                    <div class="me-3 truncate text-lg font-medium">Posted Ads</div>
                                    <x-base.badge class="bg-(--color)/10 border-(--color)/40 ms-auto whitespace-nowrap">180
                                        Campaign</x-base.badge>
                                </div>
                                <div class="mt-1">
                                    <x-simple-line-chart-1
                                        class="-ms-1"
                                        height="h-[58px]"
                                    />
                                </div>
                            </x-base.box>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Weekly Top Products -->
                    <div class="col-span-12 mt-6">
                        <div class="block h-10 items-center sm:flex">
                            <h2 class="me-5 truncate text-lg font-medium">
                                Weekly Top Products
                            </h2>
                            <div class="mt-3 flex items-center sm:ms-auto sm:mt-0">
                                <x-base.button class="box flex items-center border-inherit">
                                    <x-base.lucide
                                        class="me-2 hidden sm:block"
                                        icon="FileText"
                                    />
                                    Export to Excel
                                </x-base.button>
                                <x-base.button class="box ms-3 flex items-center border-inherit">
                                    <x-base.lucide
                                        class="me-2 hidden sm:block"
                                        icon="FileText"
                                    />
                                    Export to PDF
                                </x-base.button>
                            </div>
                        </div>
                        <div class="mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
                            <x-base.table
                                class="sm:mt-2"
                                boxed
                            >
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th>
                                            IMAGES
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            PRODUCT NAME
                                        </x-base.table.th>
                                        <x-base.table.th class="text-center">
                                            STOCK
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
                                    @foreach (array_slice($fakers, 0, 4) as $faker)
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <x-base.avatar
                                                        class="bg-background"
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                        title="{{ 'Uploaded at ' . $faker['dates'][0] }}"
                                                    />
                                                    <x-base.avatar
                                                        class="bg-background -ms-5"
                                                        src="{{ Vite::asset($faker['images'][1]) }}"
                                                        title="{{ 'Uploaded at ' . $faker['dates'][1] }}"
                                                    />
                                                    <x-base.avatar
                                                        class="bg-background -ms-5"
                                                        src="{{ Vite::asset($faker['images'][2]) }}"
                                                        title="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <a
                                                    class="whitespace-nowrap font-medium"
                                                    href=""
                                                >
                                                    {{ $faker['products'][0]['name'] }}
                                                </a>
                                                <div class="mt-1 whitespace-nowrap text-xs opacity-70">
                                                    {{ $faker['products'][0]['category'] }}
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td class="text-center">
                                                {{ $faker['stocks'][0] }}
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div @class([
                                                    'flex items-center justify-center',
                                                    'text-success' => $faker['true_false'][0],
                                                    'text-danger' => !$faker['true_false'][0],
                                                ])>
                                                    <x-base.lucide
                                                        class="me-2"
                                                        icon="CheckSquare"
                                                    />
                                                    {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex items-center justify-center">
                                                    <a
                                                        class="me-3 flex items-center"
                                                        href=""
                                                    >
                                                        <x-base.lucide
                                                            class="me-1"
                                                            icon="CheckSquare"
                                                        />
                                                        Edit
                                                    </a>
                                                    <a
                                                        class="text-danger flex items-center"
                                                        href=""
                                                    >
                                                        <x-base.lucide
                                                            class="me-1"
                                                            icon="Trash"
                                                        />
                                                        Delete
                                                    </a>
                                                </div>
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    @endforeach
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                        <div class="mt-3 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                            <x-base.pagination class="w-full sm:me-auto sm:w-auto">
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
                    </div>
                    <!-- END: Weekly Top Products -->
                </div>
            </div>
            <div class="col-span-12 2xl:col-span-3">
                <div class="-mb-10 h-full pb-10 2xl:border-l">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                        <!-- BEGIN: Transactions -->
                        <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12 2xl:mt-8">
                            <div class="flex h-10 items-center">
                                <h2 class="me-5 truncate text-lg font-medium">Transactions</h2>
                            </div>
                            <div class="mt-5">
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                    <x-base.box class="mb-3 flex items-center px-5 py-3 before:hidden">
                                        <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                        <div class="me-auto ms-4">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="mt-1 text-xs opacity-70">
                                                {{ $faker['dates'][0] }}
                                            </div>
                                        </div>
                                        <div @class([
                                            'text-success' => $faker['true_false'][0],
                                            'text-danger' => !$faker['true_false'][0],
                                        ])>
                                            {{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}
                                        </div>
                                    </x-base.box>
                                @endforeach
                                <x-base.button class="box h-12 w-full border-dotted">View More</x-base.button>
                            </div>
                        </div>
                        <!-- END: Transactions -->
                        <!-- BEGIN: Recent Activities -->
                        <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                            <div class="flex h-10 items-center">
                                <h2 class="me-5 truncate text-lg font-medium">
                                    Recent Activities
                                </h2>
                                <a
                                    class="text-primary ms-auto truncate"
                                    href=""
                                > Show More </a>
                            </div>
                            <div
                                class="before:bg-foreground/10 relative mt-5 before:absolute before:ms-5 before:mt-5 before:block before:h-[85%] before:w-px">
                                <div class="relative mb-3 flex items-center">
                                    <div
                                        class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                        <x-base.avatar src="{{ Vite::asset($fakers[9]['photos'][0]) }}" />
                                    </div>
                                    <x-base.box class="z-10 ms-4 flex-1 px-5 py-3 before:hidden">
                                        <div class="flex items-center">
                                            <div class="font-medium">
                                                {{ $fakers[9]['users'][0]['name'] }}
                                            </div>
                                            <div class="ms-auto text-xs opacity-70">07:00 PM</div>
                                        </div>
                                        <div class="mt-1 opacity-70">Has joined the team</div>
                                    </x-base.box>
                                </div>
                                <div class="relative mb-3 flex items-center">
                                    <div
                                        class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                        <x-base.avatar src="{{ Vite::asset($fakers[8]['photos'][0]) }}" />
                                    </div>
                                    <x-base.box class="z-10 ms-4 flex-1 px-5 py-3 before:hidden">
                                        <div class="flex items-center">
                                            <div class="font-medium">
                                                {{ $fakers[8]['users'][0]['name'] }}
                                            </div>
                                            <div class="ms-auto text-xs opacity-70">07:00 PM</div>
                                        </div>
                                        <div>
                                            <div class="mt-1 opacity-70">Added 3 new photos</div>
                                            <div class="mt-2 flex gap-2">
                                                <x-base.avatar
                                                    class="size-8 rounded-lg border-none ring-0"
                                                    src="{{ Vite::asset($fakers[6]['photos'][0]) }}"
                                                />
                                                <x-base.avatar
                                                    class="size-8 rounded-lg border-none ring-0"
                                                    src="{{ Vite::asset($fakers[6]['photos'][1]) }}"
                                                />
                                                <x-base.avatar
                                                    class="size-8 rounded-lg border-none ring-0"
                                                    src="{{ Vite::asset($fakers[6]['photos'][2]) }}"
                                                />
                                            </div>
                                        </div>
                                    </x-base.box>
                                </div>
                                <div class="my-4 text-center text-xs opacity-70">
                                    12 November
                                </div>
                                <div class="relative mb-3 flex items-center">
                                    <div
                                        class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                        <x-base.avatar src="{{ Vite::asset($fakers[7]['photos'][0]) }}" />
                                    </div>
                                    <x-base.box class="z-10 ms-4 flex-1 px-5 py-3 before:hidden">
                                        <div class="flex items-center">
                                            <div class="font-medium">
                                                {{ $fakers[7]['users'][0]['name'] }}
                                            </div>
                                            <div class="ms-auto text-xs opacity-70">07:00 PM</div>
                                        </div>
                                        <div class="mt-1 opacity-70">
                                            Has changed
                                            <a
                                                class="text-primary"
                                                href=""
                                            >
                                                {{ $fakers[7]['products'][0]['name'] }}
                                            </a>
                                            price and description
                                        </div>
                                    </x-base.box>
                                </div>
                                <div class="relative mb-3 flex items-center">
                                    <div
                                        class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                        <x-base.avatar src="{{ Vite::asset($fakers[6]['photos'][0]) }}" />
                                    </div>
                                    <x-base.box class="z-10 ms-4 flex-1 px-5 py-3 before:hidden">
                                        <div class="flex items-center">
                                            <div class="font-medium">
                                                {{ $fakers[6]['users'][0]['name'] }}
                                            </div>
                                            <div class="ms-auto text-xs opacity-70">07:00 PM</div>
                                        </div>
                                        <div class="mt-1 opacity-70">
                                            Has changed
                                            <a
                                                class="text-primary"
                                                href=""
                                            >
                                                {{ $fakers[6]['products'][0]['name'] }}
                                            </a>
                                            description
                                        </div>
                                    </x-base.box>
                                </div>
                            </div>
                        </div>
                        <!-- END: Recent Activities -->
                        <!-- BEGIN: Daily Notes -->
                        <div
                            class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto">
                            <div class="flex h-10 items-center">
                                <h2 class="me-auto truncate text-lg font-medium">
                                    Daily Notes
                                </h2>
                                <x-base.button class="box me-2 border-inherit px-2">
                                    <x-base.lucide icon="ChevronLeft" />
                                </x-base.button>
                                <x-base.button class="box me-2 border-inherit px-2">
                                    <x-base.lucide icon="ChevronRight" />
                                </x-base.button>
                            </div>
                            <div class="mt-5">
                                <x-base.box>
                                    <x-base.tiny-slider>
                                        <div>
                                            <div class="truncate text-base font-medium">
                                                Lorem Ipsum is simply dummy text
                                            </div>
                                            <div class="mt-2 text-xs opacity-50">Posted 20 Hours ago</div>
                                            <div class="mt-2 text-justify opacity-70">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s.
                                            </div>
                                            <div class="mt-5 flex font-medium">
                                                <x-base.button
                                                    type="button"
                                                    size="sm"
                                                >
                                                    View Notes
                                                </x-base.button>
                                                <x-base.button
                                                    class="ms-auto"
                                                    type="button"
                                                    size="sm"
                                                >
                                                    Dismiss
                                                </x-base.button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="truncate text-base font-medium">
                                                Lorem Ipsum is simply dummy text
                                            </div>
                                            <div class="mt-2 text-xs opacity-50">Posted 20 Hours ago</div>
                                            <div class="mt-2 text-justify opacity-70">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s.
                                            </div>
                                            <div class="mt-5 flex font-medium">
                                                <x-base.button
                                                    type="button"
                                                    size="sm"
                                                >
                                                    View Notes
                                                </x-base.button>
                                                <x-base.button
                                                    class="ms-auto"
                                                    type="button"
                                                    size="sm"
                                                >
                                                    Dismiss
                                                </x-base.button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="truncate text-base font-medium">
                                                Lorem Ipsum is simply dummy text
                                            </div>
                                            <div class="mt-2 text-xs opacity-50">Posted 20 Hours ago</div>
                                            <div class="mt-2 text-justify opacity-70">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s.
                                            </div>
                                            <div class="mt-5 flex font-medium">
                                                <x-base.button
                                                    type="button"
                                                    size="sm"
                                                >
                                                    View Notes
                                                </x-base.button>
                                                <x-base.button
                                                    class="ms-auto"
                                                    type="button"
                                                    size="sm"
                                                >
                                                    Dismiss
                                                </x-base.button>
                                            </div>
                                        </div>
                                    </x-base.tiny-slider>
                                </x-base.box>
                            </div>
                        </div>
                        <!-- END: Daily Notes -->
                        <!-- BEGIN: Schedules -->
                        <div
                            class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 xl:col-start-1 xl:row-start-2 2xl:col-span-12 2xl:col-start-auto 2xl:row-start-auto">
                            <div class="flex h-10 items-center">
                                <h2 class="me-5 truncate text-lg font-medium">Schedules</h2>
                                <a
                                    class="text-primary ms-auto flex items-center truncate"
                                    href=""
                                >
                                    <x-base.lucide
                                        class="me-1"
                                        icon="Plus"
                                    /> Add New Schedules
                                </a>
                            </div>
                            <div class="mt-5">
                                <x-base.box>
                                    <div class="flex">
                                        <x-base.lucide
                                            class="size-5 opacity-70"
                                            icon="ChevronLeft"
                                        />
                                        <div class="mx-auto text-base font-medium">April</div>
                                        <x-base.lucide
                                            class="size-5 opacity-70"
                                            icon="ChevronRight"
                                        />
                                    </div>
                                    <div class="mt-5 grid grid-cols-7 gap-4 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="relative rounded py-0.5 opacity-70">29</div>
                                        <div class="relative rounded py-0.5 opacity-70">30</div>
                                        <div class="relative rounded py-0.5 opacity-70">31</div>
                                        <div class="relative rounded py-0.5">1</div>
                                        <div class="relative rounded py-0.5">2</div>
                                        <div class="relative rounded py-0.5">3</div>
                                        <div class="relative rounded py-0.5">4</div>
                                        <div class="relative rounded py-0.5">5</div>
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 text-(--color) rounded border py-0.5 [--color:var(--color-success)]">
                                            6
                                        </div>
                                        <div class="relative rounded py-0.5">7</div>
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 text-(--color) rounded border py-0.5 [--color:var(--color-primary)]">
                                            8
                                        </div>
                                        <div class="relative rounded py-0.5">9</div>
                                        <div class="relative rounded py-0.5">10</div>
                                        <div class="relative rounded py-0.5">11</div>
                                        <div class="relative rounded py-0.5">12</div>
                                        <div class="relative rounded py-0.5">13</div>
                                        <div class="relative rounded py-0.5">14</div>
                                        <div class="relative rounded py-0.5">15</div>
                                        <div class="relative rounded py-0.5">16</div>
                                        <div class="relative rounded py-0.5">17</div>
                                        <div class="relative rounded py-0.5">18</div>
                                        <div class="relative rounded py-0.5">19</div>
                                        <div class="relative rounded py-0.5">20</div>
                                        <div class="relative rounded py-0.5">21</div>
                                        <div class="relative rounded py-0.5">22</div>
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 text-(--color) rounded border py-0.5 [--color:var(--color-pending)]">
                                            23
                                        </div>
                                        <div class="relative rounded py-0.5">24</div>
                                        <div class="relative rounded py-0.5">25</div>
                                        <div class="relative rounded py-0.5">26</div>
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 text-(--color) rounded border py-0.5 [--color:var(--color-warning)]">
                                            27
                                        </div>
                                        <div class="relative rounded py-0.5">28</div>
                                        <div class="relative rounded py-0.5">29</div>
                                        <div class="relative rounded py-0.5">30</div>
                                        <div class="relative rounded py-0.5 opacity-70">1</div>
                                        <div class="relative rounded py-0.5 opacity-70">2</div>
                                        <div class="relative rounded py-0.5 opacity-70">3</div>
                                        <div class="relative rounded py-0.5 opacity-70">4</div>
                                        <div class="relative rounded py-0.5 opacity-70">5</div>
                                        <div class="relative rounded py-0.5 opacity-70">6</div>
                                        <div class="relative rounded py-0.5 opacity-70">7</div>
                                        <div class="relative rounded py-0.5 opacity-70">8</div>
                                        <div class="relative rounded py-0.5 opacity-70">9</div>
                                    </div>
                                    <div class="mt-5 border-t pt-5">
                                        <div class="flex items-center">
                                            <div
                                                class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-pending)]">
                                            </div>
                                            <span class="truncate">UI/UX Workshop</span>
                                            <span class="font-medium xl:ms-auto">23th</span>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <div
                                                class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                            </div>
                                            <span class="truncate"> VueJs Frontend Development </span>
                                            <span class="font-medium xl:ms-auto">10th</span>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <div
                                                class="bg-(--color)/20 border-(--color)/60 me-3 size-2 rounded-full border [--color:var(--color-warning)]">
                                            </div>
                                            <span class="truncate">Laravel Rest API</span>
                                            <span class="font-medium xl:ms-auto">31th</span>
                                        </div>
                                    </div>
                                </x-base.box>
                            </div>
                        </div>
                        <!-- END: Schedules -->
                    </div>
                </div>
            </div>
        </div>
        <x-base.dialog
            class="sm:max-w-xl"
            id="onboarding-dialog"
        >
            <a
                class="bg-background/80 hover:bg-background absolute right-0 top-0 -mr-3 -mt-3 flex size-9 items-center justify-center rounded-full border shadow outline-none backdrop-blur"
                data-tw-dismiss="modal"
                href="#"
            >
                <x-base.lucide
                    class="size-5 opacity-70"
                    icon="X"
                />
            </a>
            <div class="-mx-3 pb-5">
                <x-base.tiny-slider
                    class="mb-11 mt-2"
                    config="{
                        nav: true
                    }"
                >
                    <div class="relative mx-3 flex flex-col items-center gap-1 px-3.5">
                        <div @class([
                            'w-full bg-primary/[.05] mb-7 border-primary/10 shadow-lg shadow-black/10 relative rounded-3xl border h-52 overflow-hidden',
                            'before:bg-noise before:absolute before:inset-0 before:opacity-30',
                            'after:bg-accent after:absolute after:inset-0 after:opacity-30 after:blur-2xl',
                        ])>
                            <img
                                class="absolute inset-0 mx-auto mt-10 w-2/5 scale-125"
                                src="{{ Vite::asset('resources/images/phone-illustration.svg') }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                        <div class="px-8">
                            <div class="text-center text-xl font-medium">Welcome to Midone Admin!</div>
                            <div class="mt-3 text-center text-base leading-relaxed opacity-70">
                                Premium admin dashboard template for all kinds <br /> of projects.
                                With a unique and modern design, Midone offers the perfect foundation to build professional
                                applications with ease.
                            </div>
                        </div>
                        <div class="absolute inset-x-0 bottom-0 -mb-12 flex place-content-between px-5">
                            <a
                                class="text-danger flex items-center gap-3 font-medium"
                                data-tw-dismiss="modal"
                                href=""
                            >
                                Skip Intro
                            </a>
                            <a
                                class="text-primary flex items-center gap-3 font-medium"
                                href=""
                            >
                                Next <x-base.lucide
                                    class=""
                                    icon="MoveRight"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="relative mx-3 flex flex-col items-center gap-1 px-3.5">
                        <div @class([
                            'w-full bg-primary/[.05] mb-7 border-primary/10 shadow-lg shadow-black/10 relative rounded-3xl border h-52 overflow-hidden',
                            'before:bg-noise before:absolute before:inset-0 before:opacity-30',
                            'after:bg-accent after:absolute after:inset-0 after:opacity-30 after:blur-2xl',
                        ])>
                            <img
                                class="absolute inset-0 mx-auto mt-10 w-2/5 scale-125"
                                src="{{ Vite::asset('resources/images/woman-illustration.svg') }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                        <div class="w-full">
                            <div class="text-center text-xl font-medium">Example Request Information</div>
                            <div class="mt-3 text-center text-base leading-relaxed opacity-70">
                                Your premium admin dashboard template.
                            </div>
                            <div class="mt-8">
                                <div class="grid grid-cols-2 gap-5 px-5">
                                    <x-base.form.item>
                                        <x-base.label>Full Name</x-base.label>
                                        <x-base.input
                                            type="text"
                                            placeholder="John Doe"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label>Event</x-base.label>
                                        <x-base.select>
                                            <option>Corporate Event</option>
                                            <option>Wedding</option>
                                            <option>Birthday</option>
                                            <option>Other</option>
                                        </x-base.select>
                                    </x-base.form.item>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-x-0 bottom-0 -mb-12 flex place-content-between px-5">
                            <a
                                class="text-primary flex items-center gap-3 font-medium"
                                href=""
                            >
                                <x-base.lucide
                                    class=""
                                    icon="MoveLeft"
                                /> Previous
                            </a>
                        </div>
                    </div>
                </x-base.tiny-slider>
            </div>
        </x-base.dialog>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/pages/dashboard-overview-1.js')
@endPushOnce
