@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>{{ env('APP_NAME') }}</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="col-span-12 mt-6 -mb-6">
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
                <!-- BEGIN: Notification -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-2 lg:col-span-8 xl:col-span-6">
                    <div class="items-center block h-10 sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">General Report</h2>
                        <x-base.select class="mt-3 box sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.select>
                    </div>
                    <x-base.box class="relative p-0 mt-12 sm:mt-5">
                        <div class="sm:flex">
                            <div class="flex flex-col justify-center flex-1 px-8 py-12">
                                <x-base.lucide
                                    class="w-10 h-10 stroke-1 text-warning"
                                    icon="ShoppingBag"
                                />
                                <div class="mt-12 text-2xl font-medium leading-8">$47,091.47</div>
                                <x-base.tooltip
                                    class="mr-auto mt-3 [--color:var(--color-success)]"
                                    as="x-base.badge"
                                    content="9% Higher than last month"
                                >
                                    47%
                                    <x-base.lucide
                                        class="ml-0.5"
                                        icon="ChevronUp"
                                    />
                                </x-base.tooltip>
                                <div class="mt-4 opacity-70">
                                    Sales earnings this month after associated author fees, &
                                    before taxes.
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
                            <div
                                class="flex flex-col justify-center flex-1 px-8 py-12 border-t border-dashed sm:border-l sm:border-t-0">
                                <div class="text-xs opacity-70">TOTAL TRANSACTION</div>
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
                                <div class="mt-6 text-xs opacity-70">CANCELATION CASE</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">2</div>
                                    <x-base.tooltip
                                        class="border-transparent bg-transparent [--color:var(--color-danger)]"
                                        as="x-base.badge"
                                        content="9% Higher than last month"
                                    >
                                        0.1%
                                        <x-base.lucide
                                            class="ml-0.5"
                                            icon="ChevronDown"
                                        />
                                    </x-base.tooltip>
                                </div>
                                <div class="mt-6 text-xs opacity-70">
                                    GROSS RENTAL VALUE
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">$72.000</div>
                                    <x-base.tooltip
                                        class="border-transparent bg-transparent [--color:var(--color-success)]"
                                        as="x-base.badge"
                                        content="9% Higher than last month"
                                    >
                                        0.1%
                                        <x-base.lucide
                                            class="ml-0.5"
                                            icon="ChevronUp"
                                        />
                                    </x-base.tooltip>
                                </div>
                                <div class="mt-6 text-xs opacity-70">
                                    GROSS RENTAL PROFIT
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">$54.000</div>
                                    <x-base.tooltip
                                        class="border-transparent bg-transparent [--color:var(--color-success)]"
                                        as="x-base.badge"
                                        content="9% Higher than last month"
                                    >
                                        52%
                                        <x-base.lucide
                                            class="ml-0.5"
                                            icon="ChevronUp"
                                        />
                                    </x-base.tooltip>
                                </div>
                                <div class="mt-6 text-xs opacity-70">NEW USERS</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">2.500</div>
                                    <x-base.tooltip
                                        class="border-transparent bg-transparent [--color:var(--color-success)]"
                                        as="x-base.badge"
                                        content="9% Higher than last month"
                                    >
                                        52%
                                        <x-base.lucide
                                            class="ml-0.5"
                                            icon="ChevronUp"
                                        />
                                    </x-base.tooltip>
                                </div>
                            </div>
                        </div>
                    </x-base.box>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 mt-2 sm:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex items-center h-10">
                        <h2 class="mr-5 text-lg font-medium truncate">Visitors</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > View on Map </a>
                    </div>
                    <x-base.box class="mt-5">
                        <div class="flex items-center">
                            Realtime active users
                            <x-base.dropdown-menu class="ml-auto">
                                <x-base.dropdown-menu.trigger
                                    class="block -mr-2"
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
                                            class="mr-2"
                                            icon="FileText"
                                        />
                                        Export
                                    </x-base.dropdown-menu.item>
                                    <x-base.dropdown-menu.item>
                                        <x-base.lucide
                                            class="mr-2"
                                            icon="Settings"
                                        />
                                        Settings
                                    </x-base.dropdown-menu.item>
                                </x-base.dropdown-menu.content>
                            </x-base.dropdown-menu>
                        </div>
                        <div class="mt-2 text-2xl font-medium">214</div>
                        <div class="flex pb-2 mt-4 border-b">
                            <div class="text-xs opacity-70">Page views per second</div>
                            <x-base.tooltip
                                class="ml-auto border-transparent bg-transparent pr-0 [--color:var(--color-success)]"
                                as="x-base.badge"
                                content="49% Higher than last month"
                            >
                                49%
                                <x-base.lucide
                                    class="ml-0.5"
                                    icon="ChevronDown"
                                />
                            </x-base.tooltip>
                        </div>
                        <div class="mt-2 border-b">
                            <div class="-mb-1.5 -ml-2.5">
                                <x-report-bar-chart height="h-[75px]" />
                            </div>
                        </div>
                        <div class="flex pb-2 mt-4 mb-2 text-xs border-b opacity-70">
                            <div>Top Active Pages</div>
                            <div class="ml-auto">Active Users</div>
                        </div>
                        <div class="flex">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">472</div>
                        </div>
                        <div class="mt-1.5 flex">
                            <div>/midone…review/1674</div>
                            <div class="ml-auto">294</div>
                        </div>
                        <div class="mt-1.5 flex">
                            <div>/profile…review/46789</div>
                            <div class="ml-auto">83</div>
                        </div>
                        <div class="mt-1.5 flex">
                            <div>/profile…review/24357</div>
                            <div class="ml-auto">21</div>
                        </div>
                        <x-base.button
                            class="w-full mt-4 border-dashed"
                            size="sm"
                        >
                            Real-Time Report
                        </x-base.button>
                    </x-base.box>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Users By Age -->
                <div class="col-span-12 mt-2 sm:col-span-6 lg:col-span-4 lg:mt-6 xl:col-span-3 xl:mt-2">
                    <div class="flex items-center h-10">
                        <h2 class="mr-5 text-lg font-medium truncate">Users By Age</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <x-base.box class="relative mt-5">
                        <x-base.tabs>
                            <x-base.tabs.list>
                                <x-base.tabs.trigger>Active</x-base.tabs.trigger>
                                <x-base.tabs.trigger>Inactive</x-base.tabs.trigger>
                            </x-base.tabs.list>
                            <x-base.tabs.contents class="mt-5">
                                <x-base.tabs.content>
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
                    </x-base.box>
                </div>
                <!-- END: Users By Age -->
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
                <!-- BEGIN: Ads 1 -->
                <div class="col-span-12 mt-6 lg:col-span-6">
                    <x-base.box
                        class="before:bg-(--color)/5 before:border-(--color)/20 after:bg-(--color)/5 after:border-(--color)/20 p-px [--color:var(--color-primary)]"
                    >
                        <div class="text-(--color) relative overflow-hidden rounded-xl px-8 pb-7 pt-6">
                            <div class="w-full text-lg font-medium leading-relaxed sm:w-72">
                                Transact Safely with Lender’s <br /> Fund Account
                            </div>
                            <div class="w-full mt-1 opacity-70 sm:w-72">
                                Apply now, quick registration.
                            </div>
                            <x-base.button
                                class="w-32 mt-6 sm:mt-8"
                                variant="primary"
                                size="sm"
                            >
                                Start Now
                            </x-base.button>
                            <img
                                class="absolute top-0 right-0 hidden w-2/5 mr-2 -mt-3 sm:block"
                                src="{{ Vite::asset('resources/images/woman-illustration.svg') }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                    </x-base.box>
                </div>
                <!-- END: Ads 1 -->
                <!-- BEGIN: Ads 2 -->
                <div class="col-span-12 mt-6 lg:col-span-6">
                    <x-base.box
                        class="before:bg-(--color)/5 before:border-(--color)/20 after:bg-(--color)/5 after:border-(--color)/20 p-px [--color:var(--color-warning)]"
                    >
                        <div class="text-(--color) relative overflow-hidden rounded-xl px-8 pb-7 pt-5">
                            <div class="w-full text-lg font-medium leading-relaxed sm:w-64">
                                Invite Friends to Get
                                <span class="font-medium">Free</span> Bonuses!
                            </div>
                            <div class="w-full mt-1 opacity-70 sm:w-60">
                                Invite friends, get a $200 voucher!
                            </div>
                            <x-base.tooltip
                                class="relative cursor-pointer mt-7 w-52"
                                as="div"
                                content="Copy referral link"
                            >
                                <x-base.input
                                    class="bg-(--color)/5 border-(--color)/20 cursor-pointer"
                                    type="text"
                                    value="https://dashboard.in"
                                />
                                <x-base.lucide
                                    class="absolute top-0 bottom-0 right-0 my-auto mr-4 size-4"
                                    icon="Copy"
                                />
                            </x-base.tooltip>
                            <img
                                class="absolute top-0 right-0 hidden w-1/2 mt-1 -mr-12 sm:block"
                                src="{{ Vite::asset('resources/images/phone-illustration.svg') }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                    </x-base.box>
                </div>
                <!-- END: Ads 2 -->
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
        <div class="col-span-12 2xl:col-span-3">
            <div class="h-full pb-10 -mb-10 2xl:border-l">
                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                    <!-- BEGIN: Daily Notes -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 2xl:mt-8">
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
