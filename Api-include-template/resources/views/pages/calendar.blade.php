@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Calendar - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Calendar</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="box mr-2"
                variant="primary"
            >
                Print Schedule
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
                            icon="Share"
                        /> Share
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Settings"
                        /> Settings
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
        </div>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <x-base.box>
                <x-base.button
                    class="w-full"
                    type="button"
                    variant="primary"
                >
                    <x-base.lucide
                        class="mr-2 size-4"
                        icon="Edit"
                    /> Add New Schedule
                </x-base.button>
                <x-base.calendar.draggable
                    class="mb-5 mt-6 border-b border-t py-3"
                    data-events
                >
                    <div class="relative">
                        <div
                            class="hover:bg-foreground/5 -mx-3 flex cursor-pointer items-center rounded-lg p-3 transition duration-300 ease-in-out"
                            data-event
                        >
                            <div
                                class="bg-(--color)/20 border-(--color)/60 me-3 h-2 w-2 rounded-full border [--color:var(--color-pending)]">
                            </div>
                            <div class="pr-10">
                                <div
                                    class="truncate"
                                    data-title
                                >VueJS Amsterdam</div>
                                <div class="mt-0.5 text-xs opacity-70">
                                    <span data-days>2</span> Days
                                    <span class="mx-1">•</span> 10:00 AM
                                </div>
                            </div>
                        </div>
                        <a
                            class="absolute bottom-0 right-0 top-0 my-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="size-4 opacity-70"
                                icon="Edit"
                            />
                        </a>
                    </div>
                    <div class="relative">
                        <div
                            class="hover:bg-foreground/5 -mx-3 flex cursor-pointer items-center rounded-lg p-3 transition duration-300 ease-in-out"
                            data-event
                        >
                            <div
                                class="bg-(--color)/20 border-(--color)/60 me-3 h-2 w-2 rounded-full border [--color:var(--color-warning)]">
                            </div>
                            <div class="pr-10">
                                <div
                                    class="truncate"
                                    data-title
                                >
                                    Vue Fes Japan 2019
                                </div>
                                <div class="mt-0.5 text-xs opacity-70">
                                    <span data-days>3</span> Days
                                    <span class="mx-1">•</span> 07:00 AM
                                </div>
                            </div>
                        </div>
                        <a
                            class="absolute bottom-0 right-0 top-0 my-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="size-4 opacity-70"
                                icon="Edit"
                            />
                        </a>
                    </div>
                    <div class="relative">
                        <div
                            class="hover:bg-foreground/5 -mx-3 flex cursor-pointer items-center rounded-lg p-3 transition duration-300 ease-in-out"
                            data-event
                        >
                            <div
                                class="bg-(--color)/20 border-(--color)/60 me-3 h-2 w-2 rounded-full border [--color:var(--color-success)]">
                            </div>
                            <div class="pr-10">
                                <div
                                    class="truncate"
                                    data-title
                                >Laracon 2021</div>
                                <div class="mt-0.5 text-xs opacity-70">
                                    <span data-days>4</span> Days
                                    <span class="mx-1">•</span> 11:00 AM
                                </div>
                            </div>
                        </div>
                        <a
                            class="absolute bottom-0 right-0 top-0 my-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="size-4 opacity-70"
                                icon="Edit"
                            />
                        </a>
                    </div>
                    <div
                        class="hidden p-3 text-center opacity-70"
                        data-no-events
                    >
                        No events yet
                    </div>
                </x-base.calendar.draggable>
                <x-base.form.item class="flex-row items-center justify-between">
                    <x-base.label for="checkbox-events">
                        Remove after drop
                    </x-base.label>
                    <x-base.switch
                        id="checkbox-events"
                        type="checkbox"
                    />
                </x-base.form.item>
            </x-base.box>
            <x-base.box class="mt-8">
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
                            class="bg-(--color)/20 border-(--color)/60 me-3 h-2 w-2 rounded-full border [--color:var(--color-pending)]">
                        </div>
                        <span class="truncate">UI/UX Workshop</span>
                        <span class="font-medium xl:ms-auto">23th</span>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 h-2 w-2 rounded-full border [--color:var(--color-primary)]">
                        </div>
                        <span class="truncate"> VueJs Frontend Development </span>
                        <span class="font-medium xl:ms-auto">10th</span>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div
                            class="bg-(--color)/20 border-(--color)/60 me-3 h-2 w-2 rounded-full border [--color:var(--color-warning)]">
                        </div>
                        <span class="truncate">Laravel Rest API</span>
                        <span class="font-medium xl:ms-auto">31th</span>
                    </div>
                </div>
            </x-base.box>
        </div>
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <x-base.box>
                <x-calendar />
            </x-base.box>
        </div>
        <!-- END: Calendar Content -->
    </div>
@endsection
