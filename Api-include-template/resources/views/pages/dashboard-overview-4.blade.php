@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
   <title>{{ env('APP_NAME') }}</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8 xl:col-span-9">
                    <div class="flex items-center h-10">
                        <h2 class="mr-5 text-lg font-medium truncate">General Report</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <x-base.box class="p-0 mt-5">
                        <div class="grid grid-cols-12">
                            <div class="flex flex-col justify-center col-span-12 px-8 py-12 lg:col-span-4">
                                <x-base.lucide
                                    class="stroke-1 text-pending size-10"
                                    icon="PieChart"
                                />
                                <div class="flex items-center justify-start mt-12">
                                    <div class="opacity-90">My Total Assets</div>
                                    <x-base.tooltip content="Total value of your sales: $158.409.416">
                                        <x-base.lucide
                                            class="fill-(--color)/10 ml-2 size-4"
                                            icon="AlertCircle"
                                        />
                                    </x-base.tooltip>
                                </div>
                                <div class="flex items-center justify-start mt-3">
                                    <div class="relative text-2xl font-medium">
                                        $1,413,102.02
                                    </div>
                                    <a
                                        class="ml-4 opacity-70"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="size-4"
                                            icon="RefreshCcw"
                                        />
                                    </a>
                                </div>
                                <div class="mt-4 text-xs opacity-70">
                                    Last updated 1 hour ago
                                </div>
                                <x-base.button class="relative justify-start mt-12 rounded-full">
                                    Download Reports
                                    <x-base.button
                                        class="absolute w-8 h-8 rounded-full right-1"
                                        as="span"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="ArrowRight" />
                                    </x-base.button>
                                </x-base.button>
                            </div>
                            <div class="col-span-12 p-8 border-t border-dashed lg:col-span-8 lg:border-l lg:border-t-0">
                                <x-base.tabs class="flex flex-col items-center">
                                    <x-base.tabs.list class="w-60">
                                        <x-base.tabs.trigger>Weekly</x-base.tabs.trigger>
                                        <x-base.tabs.trigger>Monthly</x-base.tabs.trigger>
                                    </x-base.tabs.list>
                                    <x-base.tabs.contents>
                                        <x-base.tabs.content class="grid grid-cols-12 mt-6 gap-x-10 gap-y-9">
                                            <div class="col-span-6 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">UNPAID LOAN</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">4.501</div>
                                                    <x-base.tooltip
                                                        class="border-transparent bg-transparent [--color:var(--color-success)]"
                                                        as="x-base.badge"
                                                        content="9% Higher than last month"
                                                    >
                                                        2%
                                                        <x-base.lucide
                                                            class="ml-0.5"
                                                            icon="ChevronDown"
                                                        />
                                                    </x-base.tooltip>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">ACTIVE PARTNER</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">PAID INSTALLMENT</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">DISBURSEMENT</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$54.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">SUCCESS PAYMENT</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2.500</div>
                                                    <x-base.tooltip
                                                        class="border-transparent bg-transparent [--color:var(--color-danger)]"
                                                        as="x-base.badge"
                                                        content="9% Higher than last month"
                                                    >
                                                        52%
                                                        <x-base.lucide
                                                            class="ml-0.5"
                                                            icon="ChevronDown"
                                                        />
                                                    </x-base.tooltip>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">UNPAID LOAN</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">POSTED CAMPAIGN</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">4.501</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">SOCIAL MEDIA</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-xs opacity-70">NET MARGIN</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                    <x-base.tooltip
                                                        class="border-transparent bg-transparent [--color:var(--color-success)]"
                                                        as="x-base.badge"
                                                        content="9% Higher than last month"
                                                    >
                                                        49%
                                                        <x-base.lucide
                                                            class="ml-0.5"
                                                            icon="ChevronDown"
                                                        />
                                                    </x-base.tooltip>
                                                </div>
                                            </div>
                                        </x-base.tabs.content>
                                    </x-base.tabs.contents>
                                </x-base.tabs>
                            </div>
                        </div>
                    </x-base.box>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                    <div class="flex items-center h-10">
                        <h2 class="mr-5 text-lg font-medium truncate">Sales Report</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <x-base.box class="p-5 mt-5">
                        <div class="mt-3">
                            <x-report-donut-chart height="h-[192px]" />
                        </div>
                        <div class="mx-auto mt-8 w-52 sm:w-auto">
                            <div class="flex items-center">
                                <div
                                    class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                </div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div
                                    class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-pending)]">
                                </div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div
                                    class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-warning)]">
                                </div>
                                <span class="truncate">&gt;= 50 Years old</span>
                                <span class="ml-auto">10%</span>
                            </div>
                        </div>
                    </x-base.box>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 mt-6 xl:col-span-8">
                    <div class="items-center block h-10 sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Official Store</h2>
                        <div class="relative mt-3 sm:ml-auto sm:mt-0">
                            <x-base.lucide
                                class="[--color:var(--color-foreground)]/50 absolute inset-y-0 left-0 z-10 my-auto ml-3"
                                icon="MapPin"
                            />
                            <x-base.input
                                class="pl-10 box sm:w-56"
                                type="text"
                                placeholder="Filter by city"
                            />
                        </div>
                    </div>
                    <x-base.box class="p-5 mt-12 sm:mt-5">
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
                    <div class="flex items-center h-10">
                        <h2 class="mr-5 text-lg font-medium truncate">
                            Weekly Best Sellers
                        </h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <x-base.box class="flex items-center px-4 py-4 mb-3 before:hidden">
                                <x-base.avatar
                                    class="rounded-xl"
                                    src="{{ Vite::asset($faker['photos'][0]) }}"
                                />
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                    <div class="mt-1 text-xs text-foreground/70">
                                        {{ $faker['dates'][0] }}
                                    </div>
                                </div>
                                <x-base.badge class="[--color:var(--color-success)]">137 Sales</x-base.badge>
                            </x-base.box>
                        @endforeach
                        <x-base.button class="w-full h-12 border-dotted box">View More</x-base.button>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="items-center block h-10 sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Visitors</h2>
                        <x-base.select class="mt-3 box sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.select>
                    </div>
                    <x-base.box class="p-5 mt-12 sm:mt-5">
                        <div class="flex pb-3 mb-3 border-b border-dashed opacity-70">
                            <div>Parameters</div>
                            <div class="ml-auto">Report Values</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Site Visits</div>
                                <x-base.tooltip
                                    class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                                    content="49% Higher than last month"
                                >
                                    -2%
                                    <x-base.lucide
                                        class="ml-0.5 size-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.tooltip>
                            </div>
                            <div class="ml-auto">4.500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Unique Visitors</div>
                            </div>
                            <div class="ml-auto">21</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Page Views</div>
                                <x-base.tooltip
                                    class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                                    content="49% Higher than last month"
                                >
                                    5%
                                    <x-base.lucide
                                        class="ml-0.5 size-4"
                                        icon="ChevronUp"
                                    />
                                </x-base.tooltip>
                            </div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Bounce Rate</div>
                            </div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>% New Visits</div>
                                <x-base.tooltip
                                    class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                                    content="49% Higher than last month"
                                >
                                    -9%
                                    <x-base.lucide
                                        class="ml-0.5 size-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.tooltip>
                            </div>
                            <div class="ml-auto">32%</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Average Tim On Site</div>
                            </div>
                            <div class="ml-auto">1.5M</div>
                        </div>
                        <x-base.button class="relative justify-start w-full mb-2 border-dashed">
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="size-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </x-base.box>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Most Viewed Pages -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="items-center block h-10 sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Most Viewed Pages</h2>
                        <x-base.select class="mt-3 box sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.select>
                    </div>
                    <x-base.box class="p-5 mt-12 sm:mt-5">
                        <div class="flex pb-3 mb-3 border-b border-dashed opacity-70">
                            <div>Page Names</div>
                            <div class="ml-auto">Page Views</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">472</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/midone…review/1674</div>
                            <div class="ml-auto">294</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/profile…review/46789</div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/profile…review/24357</div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">83</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/icewall…review/1674</div>
                            <div class="ml-auto">21</div>
                        </div>
                        <x-base.button class="relative justify-start w-full mb-2 border-dashed">
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="size-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </x-base.box>
                </div>
                <!-- END: Most Viewed Pages -->
                <!-- BEGIN: Top Search Items -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="items-center block h-10 sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Top Search Items</h2>
                        <x-base.select class="mt-3 box sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.select>
                    </div>
                    <x-base.box class="p-5 mt-12 sm:mt-5">
                        <div class="flex pb-3 mb-3 border-b border-dashed opacity-70">
                            <div>Keywords</div>
                            <div class="ml-auto">Searched</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Laravel 8</div>
                            <div class="ml-auto">200</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Eloquent</div>
                            <div class="ml-auto">50</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>CKEditor Source Build</div>
                            <div class="ml-auto">31</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Midone Docs</div>
                            <div class="ml-auto">405</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Vue 3 Release Date</div>
                            <div class="ml-auto">201</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Install Vite Vue</div>
                            <div class="ml-auto">42</div>
                        </div>
                        <x-base.button class="relative justify-start w-full mb-2 border-dashed">
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="size-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </x-base.box>
                </div>
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="items-center block h-10 sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">
                            Weekly Top Products
                        </h2>
                        <div class="flex items-center mt-3 sm:ml-auto sm:mt-0">
                            <x-base.button class="flex items-center box border-inherit">
                                <x-base.lucide
                                    class="hidden mr-2 sm:block"
                                    icon="FileText"
                                />
                                Export to Excel
                            </x-base.button>
                            <x-base.button class="flex items-center ml-3 box border-inherit">
                                <x-base.lucide
                                    class="hidden mr-2 sm:block"
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
                                                class="font-medium whitespace-nowrap"
                                                href=""
                                            >
                                                {{ $faker['products'][0]['name'] }}
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap opacity-70">
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
                                                    class="mr-2"
                                                    icon="CheckSquare"
                                                />
                                                {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td>
                                            <div class="flex items-center justify-center">
                                                <a
                                                    class="flex items-center mr-3"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="mr-1"
                                                        icon="CheckSquare"
                                                    />
                                                    Edit
                                                </a>
                                                <a
                                                    class="flex items-center text-danger"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="mr-1"
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
                    <div class="flex flex-wrap items-center mt-3 sm:flex-row sm:flex-nowrap">
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
                        <x-base.select class="w-20 mt-3 box sm:mt-0">
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
        <div class="relative z-20 col-span-12 2xl:col-span-3">
            <div class="h-full pb-10 -mb-10 2xl:border-l">
                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                    <!-- BEGIN: Daily Notes -->
                    <div
                        class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto 2xl:mt-8">
                        <div class="flex items-center h-10">
                            <h2 class="mr-auto text-lg font-medium truncate">
                                Daily Notes
                            </h2>
                            <x-base.button class="px-2 mr-2 box border-inherit">
                                <x-base.lucide icon="ChevronLeft" />
                            </x-base.button>
                            <x-base.button class="px-2 mr-2 box border-inherit">
                                <x-base.lucide icon="ChevronRight" />
                            </x-base.button>
                        </div>
                        <div class="mt-5">
                            <x-base.box>
                                <x-base.tiny-slider>
                                    <div>
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-2 text-xs opacity-50">Posted 20 Hours ago</div>
                                        <div class="mt-2 text-justify opacity-70">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="flex mt-5 font-medium">
                                            <x-base.button
                                                type="button"
                                                size="sm"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto"
                                                type="button"
                                                size="sm"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-2 text-xs opacity-50">Posted 20 Hours ago</div>
                                        <div class="mt-2 text-justify opacity-70">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="flex mt-5 font-medium">
                                            <x-base.button
                                                type="button"
                                                size="sm"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto"
                                                type="button"
                                                size="sm"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-2 text-xs opacity-50">Posted 20 Hours ago</div>
                                        <div class="mt-2 text-justify opacity-70">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="flex mt-5 font-medium">
                                            <x-base.button
                                                type="button"
                                                size="sm"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto"
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
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="flex items-center h-10">
                            <h2 class="mr-5 text-lg font-medium truncate">
                                Recent Activities
                            </h2>
                            <a
                                class="ml-auto truncate text-primary"
                                href=""
                            > Show More </a>
                        </div>
                        <div
                            class="before:bg-foreground/10 relative mt-5 before:absolute before:ms-5 before:mt-5 before:block before:h-[85%] before:w-px">
                            <div class="relative flex items-center mb-3">
                                <div
                                    class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                    <x-base.avatar src="{{ Vite::asset($fakers[9]['photos'][0]) }}" />
                                </div>
                                <x-base.box class="z-10 flex-1 px-5 py-3 ms-4 before:hidden">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[9]['users'][0]['name'] }}
                                        </div>
                                        <div class="text-xs ms-auto opacity-70">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 opacity-70">Has joined the team</div>
                                </x-base.box>
                            </div>
                            <div class="relative flex items-center mb-3">
                                <div
                                    class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                    <x-base.avatar src="{{ Vite::asset($fakers[8]['photos'][0]) }}" />
                                </div>
                                <x-base.box class="z-10 flex-1 px-5 py-3 ms-4 before:hidden">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[8]['users'][0]['name'] }}
                                        </div>
                                        <div class="text-xs ms-auto opacity-70">07:00 PM</div>
                                    </div>
                                    <div>
                                        <div class="mt-1 opacity-70">Added 3 new photos</div>
                                        <div class="flex gap-2 mt-2">
                                            <x-base.avatar
                                                class="border-none rounded-lg size-8 ring-0"
                                                src="{{ Vite::asset($fakers[6]['photos'][0]) }}"
                                            />
                                            <x-base.avatar
                                                class="border-none rounded-lg size-8 ring-0"
                                                src="{{ Vite::asset($fakers[6]['photos'][1]) }}"
                                            />
                                            <x-base.avatar
                                                class="border-none rounded-lg size-8 ring-0"
                                                src="{{ Vite::asset($fakers[6]['photos'][2]) }}"
                                            />
                                        </div>
                                    </div>
                                </x-base.box>
                            </div>
                            <div class="my-4 text-xs text-center opacity-70">
                                12 November
                            </div>
                            <div class="relative flex items-center mb-3">
                                <div
                                    class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                    <x-base.avatar src="{{ Vite::asset($fakers[7]['photos'][0]) }}" />
                                </div>
                                <x-base.box class="z-10 flex-1 px-5 py-3 ms-4 before:hidden">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[7]['users'][0]['name'] }}
                                        </div>
                                        <div class="text-xs ms-auto opacity-70">07:00 PM</div>
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
                            <div class="relative flex items-center mb-3">
                                <div
                                    class="before:bg-foreground/10 before:absolute before:ms-5 before:mt-5 before:block before:h-px before:w-20">
                                    <x-base.avatar src="{{ Vite::asset($fakers[6]['photos'][0]) }}" />
                                </div>
                                <x-base.box class="z-10 flex-1 px-5 py-3 ms-4 before:hidden">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[6]['users'][0]['name'] }}
                                        </div>
                                        <div class="text-xs ms-auto opacity-70">07:00 PM</div>
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
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="flex items-center h-10">
                            <h2 class="mr-5 text-lg font-medium truncate">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <x-base.box class="flex items-center px-5 py-3 mb-3 before:hidden">
                                    <x-base.avatar src="{{ Vite::asset($faker['photos'][0]) }}" />
                                    <div class="ml-4 mr-auto">
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
                            <x-base.button class="w-full h-12 border-dotted box">View More</x-base.button>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Schedules -->
                    <div
                        class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 xl:col-start-1 xl:row-start-2 2xl:col-span-12 2xl:col-start-auto 2xl:row-start-auto">
                        <div class="flex items-center h-10">
                            <h2 class="mr-5 text-lg font-medium truncate">Schedules</h2>
                            <a
                                class="flex items-center ml-auto truncate text-primary"
                                href=""
                            >
                                <x-base.lucide
                                    class="mr-1"
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
                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
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
                                <div class="pt-5 mt-5 border-t">
                                    <div class="flex items-center">
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-pending)]">
                                        </div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-primary)]">
                                        </div>
                                        <span class="truncate"> VueJs Frontend Development </span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div
                                            class="bg-(--color)/20 border-(--color)/60 mr-3 size-2 rounded-full border [--color:var(--color-warning)]">
                                        </div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
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
@endsection
