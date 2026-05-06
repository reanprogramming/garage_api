@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>{{ env('APP_NAME') }}</title>
@endsection

@section('subcontent')
    <div class="relative">
        <div class="grid grid-cols-12 gap-6">
            <div class="z-20 col-span-12 xl:col-span-9 2xl:col-span-9">
                <div class="mt-6 -mb-6">
                    <x-base.alert
                        class="before:bg-(--color)/5 before:border-(--color)/15 after:bg-(--color)/10 after:border-(--color)/20 mb-6 border-transparent bg-transparent [--color:var(--color-warning)]"
                        variant="warning"
                        dismissible
                        as="x-base.box"
                    >
                        <span>
                            Introducing new dashboard! Download now at
                            <a
                                class="underline decoration-dotted underline-offset-2"
                                href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                target="blank"
                            >
                                themeforest.net
                            </a>
                            .
                        </span>
                    </x-base.alert>
                </div>
                <div class="grid grid-cols-12 mb-3 mt-14 sm:gap-12">
                    <div
                        class="relative col-span-12 py-6 text-center sm:col-span-6 sm:pl-5 sm:text-left md:col-span-4 md:pl-0 lg:pl-5">
                        <x-base.dropdown-menu class="absolute right-0 top-0 mt-5 pt-0.5 2xl:mt-7 2xl:pt-0">
                            <x-base.dropdown-menu.trigger
                                class="block"
                                href="#"
                                as="a"
                            >
                                <x-base.lucide
                                    class="opacity-70"
                                    icon="MoreVertical"
                                />
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-40">
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="FileText"
                                    />
                                    Monthly Report
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="FileText"
                                    />
                                    Annual Report
                                </x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                        <div class="text-base">
                            Hi <span class="italic text-primary">Shane</span>, welcome back!
                        </div>
                        <div class="flex items-center justify-center mt-14 sm:justify-start 2xl:mt-20">
                            <div class="text-base opacity-70">My Assets Value</div>
                            <x-base.tooltip
                                as="div"
                                content="Last updated 1 hour ago"
                            >
                                <x-base.lucide
                                    class="fill-(--color)/10 ml-2 size-3.5"
                                    icon="AlertCircle"
                                />
                            </x-base.tooltip>
                        </div>
                        <div class="items-center my-3 2xl:flex">
                            <div class="flex flex-wrap items-center justify-center gap-5 sm:justify-start">
                                <div class="[--color:var(--color-primary)]/20 w-full text-2xl font-medium 2xl:w-auto">
                                    <span class="relative -mr-0.5 inline-block size-3 text-lg">
                                        <span class="absolute -mt-3.5">$</span>
                                    </span>
                                    977.713.302
                                </div>
                                <x-base.tooltip
                                    class="[--color:var(--color-primary)]"
                                    as="x-base.badge"
                                    content="9% Higher than last month"
                                >
                                    47%
                                    <x-base.lucide
                                        class="ml-0.5"
                                        icon="ChevronUp"
                                    />
                                </x-base.tooltip>
                                <a
                                    class="opacity-70"
                                    href=""
                                >
                                    <x-base.lucide
                                        class="size-4"
                                        icon="RefreshCcw"
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="bg-foreground/[.02] box mt-5 border px-3.5 pb-3.5 pt-3 text-xs leading-normal 2xl:mr-3">
                            <span class="opacity-80">
                                The value of your assets, calculated before any taxes are deducted, is:
                            </span>
                            <a
                                class="decoration-foreground/50 text-primary mt-0.5 inline-block font-medium underline decoration-dotted underline-offset-2 opacity-70"
                                href=""
                            >
                                $721,206,851
                            </a>.
                        </div>
                        <x-base.dropdown-menu
                            class="mt-14 2xl:mr-3 2xl:mt-24"
                            placement="bottom-start"
                        >
                            <x-base.dropdown-menu.trigger
                                class="relative justify-start w-full px-5 bg-transparent box"
                                as="x-base.button"
                            >
                                <x-base.lucide
                                    class="mr-0.5 size-4"
                                    icon="FileText"
                                />
                                Download Reports
                                <span
                                    class="absolute top-0 bottom-0 right-0 flex items-center justify-center w-8 h-8 my-auto ml-auto mr-1"
                                >
                                    <x-base.lucide
                                        class="size-4"
                                        icon="ChevronDown"
                                    />
                                </span>
                            </x-base.dropdown-menu.trigger>
                            <x-base.dropdown-menu.content class="w-44 2xl:w-64">
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="FileText"
                                    />
                                    Monthly Report
                                </x-base.dropdown-menu.item>
                                <x-base.dropdown-menu.item>
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="FileText"
                                    />
                                    Annual Report
                                </x-base.dropdown-menu.item>
                            </x-base.dropdown-menu.content>
                        </x-base.dropdown-menu>
                    </div>
                    <div
                        class="col-span-12 row-start-2 px-10 py-6 -mx-6 border-t border-dashed border-foreground/20 sm:px-28 md:col-span-4 md:row-start-auto md:border-l md:border-r md:border-t-0 md:px-6">
                        <div class="flex flex-wrap items-center">
                            <div
                                class="flex items-center justify-center w-full mb-5 mr-auto sm:w-auto sm:justify-start 2xl:mb-0">
                                <div
                                    class="bg-(--color)/20 border-(--color)/60 size-2 rounded-full border [--color:var(--color-primary)]">
                                </div>
                                <div class="ml-3.5">
                                    <div class="text-xl font-medium">
                                        $47,578.77
                                    </div>
                                    <div class="mt-1 opacity-70">Yearly budget</div>
                                </div>
                            </div>
                            <x-base.select class="box mx-auto -mt-2 w-auto bg-transparent px-3 py-1.5 sm:mx-0">
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                                <option value="custom-date">Custom Date</option>
                            </x-base.select>
                        </div>
                        <div class="mt-10 opacity-70">
                            You have spent about 35% of your annual budget.
                        </div>
                        <div class="mt-6">
                            <x-report-bar-chart-1 height="h-[270px]" />
                        </div>
                    </div>
                    <div
                        class="col-span-12 py-6 pl-4 -ml-4 border-t border-l border-dashed sm:col-span-6 sm:border-t-0 md:col-span-4 md:ml-0 md:border-l-0 md:pl-0">
                        <x-base.tabs class="w-3/4 mx-auto 2xl:w-4/6">
                            <x-base.tabs.list>
                                <x-base.tabs.trigger>Active</x-base.tabs.trigger>
                                <x-base.tabs.trigger>Inactive</x-base.tabs.trigger>
                            </x-base.tabs.list>
                            <x-base.tabs.contents>
                                <x-base.tabs.content class="mt-3.5">
                                    <div class="relative">
                                        <x-report-donut-chart
                                            class="mt-3"
                                            height="h-[208px]"
                                        />
                                        <div
                                            class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full">
                                            <div class="text-2xl font-medium">2.501</div>
                                            <div class="mt-0.5 opacity-70">Active Users</div>
                                        </div>
                                    </div>
                                    <div class="mx-auto mt-5 w-52 sm:w-auto">
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
                                </x-base.tabs.content>
                            </x-base.tabs.contents>
                        </x-base.tabs>
                    </div>
                </div>
            </div>
            <div @class([
                'z-10 col-span-12 pt-8 relative pb-14',
                'before:content-[\'\'] before:rounded-[30px] before:bg-background before:absolute before:inset-0',
                'after:content-[\'\'] after:rounded-[30px] after:bg-foreground/[.03] after:border after:absolute after:inset-0',
            ])>
                <div class="relative z-10 grid grid-cols-12 gap-6">
                    <div class="col-span-12 px-0 sm:col-span-4 lg:px-6 xl:col-span-3 xl:px-0 2xl:px-6">
                        <div class="flex flex-wrap items-center gap-3 lg:flex-nowrap">
                            <div class="mr-auto text-lg font-medium truncate sm:w-full lg:w-auto">
                                Summary Report
                            </div>
                            <x-base.badge class="bg-(--color)/10 border-(--color)/40 ml-auto whitespace-nowrap">180
                                Campaign</x-base.badge>
                        </div>
                        <div class="px-10 sm:px-0">
                            <x-simple-line-chart-3
                                class="mt-8 -ml-1 -mb-7"
                                height="h-[110px]"
                            />
                        </div>
                    </div>
                    <div class="col-span-12 px-0 sm:col-span-4 lg:px-6 xl:col-span-3 xl:px-0 2xl:px-6">
                        <div class="flex flex-wrap items-center gap-3 lg:flex-nowrap">
                            <div class="mr-auto text-lg font-medium truncate sm:w-full lg:w-auto">
                                Social Media
                            </div>
                            <a
                                class="flex items-center text-primary"
                                href=""
                            >
                                <div class="truncate 2xl:mr-auto">View Details</div>
                                <x-base.lucide
                                    class="ml-3 size-4"
                                    icon="ArrowRight"
                                />
                            </a>
                        </div>
                        <div class="flex items-center justify-center mt-9">
                            <div class="text-right">
                                <div class="text-xl font-medium">71,234,149</div>
                                <div class="mt-1 truncate opacity-70">Active Lenders</div>
                            </div>
                            <div class="w-px h-16 mx-4 border border-r border-dashed xl:mx-6">
                            </div>
                            <div>
                                <div class="text-xl font-medium">41,835,249</div>
                                <div class="mt-1 truncate opacity-70">Total Lenders</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 px-0 sm:col-span-4 lg:px-6 xl:col-span-3 xl:px-0 2xl:px-6">
                        <div class="flex flex-wrap items-center gap-3 lg:flex-nowrap">
                            <div class="mr-auto text-lg font-medium truncate sm:w-full lg:w-auto">
                                Posted Ads
                            </div>
                            <x-base.badge class="bg-(--color)/10 border-(--color)/40 ml-auto whitespace-nowrap">
                                320 Followers</x-base.badge>
                        </div>
                        <div class="px-10 sm:px-0">
                            <x-simple-line-chart-4
                                class="mt-8 -ml-1 -mb-7"
                                height="h-[110px]"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="top-0 right-0 z-30 grid w-full h-full grid-cols-12 gap-6 pb-6 -mt-8 xl:absolute xl:z-auto xl:mt-0 xl:pb-0">
            <div class="z-30 col-span-12 xl:col-span-3 xl:col-start-10 xl:pb-16">
                <div class="flex flex-col h-full">
                    <x-base.box class="mt-6">
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="mr-auto">
                                <div class="flex items-center text-xs opacity-70">
                                    AVAILABLE FUNDS
                                    <x-base.tooltip
                                        as="div"
                                        content="Last updated 1 hour ago"
                                    >
                                        <x-base.lucide
                                            class="fill-(--color)/10 -mt-0.5 ml-2 size-3.5"
                                            icon="AlertCircle"
                                        />
                                    </x-base.tooltip>
                                </div>
                                <div class="relative mt-3.5 text-xl font-medium leading-5">
                                    $447.957.877
                                </div>
                            </div>
                            <x-base.button class="rounded-full size-10">
                                <x-base.lucide
                                    class="size-6"
                                    icon="Plus"
                                />
                            </x-base.button>
                        </div>
                    </x-base.box>
                    <x-base.box class="mt-8 xl:min-h-0">
                        <div class="flex items-center">
                            <div class="mr-5 text-lg font-medium truncate">
                                Summary Report
                            </div>
                            <a
                                class="flex items-center ml-auto text-primary"
                                href=""
                            >
                                <x-base.lucide
                                    class="mr-3 size-4"
                                    icon="RefreshCcw"
                                />
                                Refresh
                            </a>
                        </div>
                        <x-base.tabs class="mt-5">
                            <x-base.tabs.list>
                                <x-base.tabs.trigger>Weekly</x-base.tabs.trigger>
                                <x-base.tabs.trigger>Monthly</x-base.tabs.trigger>
                            </x-base.tabs.list>
                            <x-base.tabs.contents>
                                <x-base.tabs.content class="grid grid-cols-12 mt-6 gap-y-7">
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-xs opacity-70">UNPAID LOAN</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$155.430.000</div>
                                            <x-base.tooltip
                                                class="border-transparent bg-transparent [--color:var(--color-success)]"
                                                as="x-base.badge"
                                                content="9% Higher than last month"
                                            >
                                                2%
                                                <x-base.lucide
                                                    class="ml-0.5"
                                                    icon="ChevronUp"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-xs opacity-70">ACTIVE FUNDING PARTNER</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">52 Partner</div>
                                            <x-base.tooltip
                                                class="border-transparent bg-transparent [--color:var(--color-danger)]"
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
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-xs opacity-70">PAID INSTALLMENT</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$75.430.000</div>
                                            <x-base.tooltip
                                                class="border-transparent bg-transparent [--color:var(--color-success)]"
                                                as="x-base.badge"
                                                content="9% Higher than last month"
                                            >
                                                36%
                                                <x-base.lucide
                                                    class="ml-0.5"
                                                    icon="ChevronUp"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-xs opacity-70">SUCCESS PAYMENT</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-xs opacity-70">WAITING FOR DISBURSEMENT</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">2</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-xs opacity-70">UNPAID LOAN</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$21.430.000</div>
                                            <x-base.tooltip
                                                class="border-transparent bg-transparent [--color:var(--color-danger)]"
                                                as="x-base.badge"
                                                content="9% Higher than last month"
                                            >
                                                23%
                                                <x-base.lucide
                                                    class="ml-0.5"
                                                    icon="ChevronDown"
                                                />
                                            </x-base.tooltip>
                                        </div>
                                    </div>
                                    <x-base.button class="relative justify-start col-span-12 border-dashed">
                                        <span class="mr-5 truncate"> My Portfolio Details </span>
                                        <span
                                            class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                                        >
                                            <x-base.lucide
                                                class="size-4"
                                                icon="ArrowRight"
                                            />
                                        </span>
                                    </x-base.button>
                                </x-base.tabs.content>
                            </x-base.tabs.contents>
                        </x-base.tabs>
                    </x-base.box>
                </div>
            </div>
        </div>
    </div>
    <div @class([
        'z-40 grid grid-cols-12 gap-6 relative min-h-[500px] 2xl:-mt-10 2xl:z-10 px-5 pb-5',
        'before:content-[\'\'] before:rounded-[30px] before:bg-background before:absolute before:inset-0',
        'after:content-[\'\'] after:rounded-[30px] after:bg-foreground/[.05] after:border after:absolute after:inset-0',
    ])>
        <div class="relative z-20 col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
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
                </div>
            </div>
        </div>
    </div>
@endsection
