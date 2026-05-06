@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Dropdown - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Dropdown</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Dropdown -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Dropdown</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.dropdown-menu>
                                    <x-base.dropdown-menu.trigger
                                        href="#"
                                        as="a"
                                    >
                                        <x-base.button variant="primary">
                                            <x-base.lucide icon="Compass" /> Open Dropdown
                                        </x-base.button>
                                    </x-base.dropdown-menu.trigger>
                                    <x-base.dropdown-menu.content class="w-56">
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2"
                                                icon="Pencil"
                                            />
                                            Edit
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.dropdown-menu.item>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.dropdown-menu>
                                        <x-base.dropdown-menu.trigger
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.button variant="primary">
                                                <x-base.lucide icon="Compass" /> Open Dropdown
                                            </x-base.button>
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-56">
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2"
                                                    icon="Pencil"
                                                />
                                                Edit
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Dropdown -->
            <!-- BEGIN: Header & Footer Dropdown -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Header & Footer Dropdown</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.dropdown-menu>
                                    <x-base.dropdown-menu.trigger
                                        href="#"
                                        as="a"
                                    >
                                        <x-base.button variant="primary">
                                            <x-base.lucide icon="Compass" /> Open Dropdown
                                        </x-base.button>
                                    </x-base.dropdown-menu.trigger>
                                    <x-base.dropdown-menu.content class="w-56">
                                        <x-base.dropdown-menu.label class="py-3 font-medium">
                                            Export Options
                                        </x-base.dropdown-menu.label>
                                        <x-base.dropdown-menu.separator />
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2"
                                                icon="Activity"
                                            />
                                            English
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2"
                                                icon="Box"
                                            />
                                            Indonesia
                                            <x-base.badge class="ml-auto [--color:var(--color-danger)]">10</x-base.badge>
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2"
                                                icon="Layout"
                                            />
                                            English
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>
                                            <x-base.lucide
                                                class="mr-2"
                                                icon="Sidebar"
                                            />
                                            Indonesia
                                        </x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.separator />
                                        <div class="flex px-2 py-1.5">
                                            <x-base.button
                                                class="text-xs"
                                                type="button"
                                                variant="primary"
                                                size="sm"
                                            >
                                                Settings
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto text-xs"
                                                type="button"
                                                variant="secondary"
                                                size="sm"
                                            >
                                                View Profile
                                            </x-base.button>
                                        </div>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.dropdown-menu>
                                        <x-base.dropdown-menu.trigger
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.button variant="primary">
                                                <x-base.lucide icon="Compass" /> Open Dropdown
                                            </x-base.button>
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="w-56">
                                            <x-base.dropdown-menu.label class="py-3 font-medium">
                                                Export Options
                                            </x-base.dropdown-menu.label>
                                            <x-base.dropdown-menu.separator />
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2"
                                                    icon="Activity"
                                                />
                                                English
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2"
                                                    icon="Box"
                                                />
                                                Indonesia
                                                <x-base.badge class="ml-auto [--color:var(--color-danger)]">10</x-base.badge>
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2"
                                                    icon="Layout"
                                                />
                                                English
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>
                                                <x-base.lucide
                                                    class="mr-2"
                                                    icon="Sidebar"
                                                />
                                                Indonesia
                                            </x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.separator />
                                            <div class="flex px-2 py-1.5">
                                                <x-base.button
                                                    class="text-xs"
                                                    type="button"
                                                    variant="primary"
                                                    size="sm"
                                                >
                                                    Settings
                                                </x-base.button>
                                                <x-base.button
                                                    class="ml-auto text-xs"
                                                    type="button"
                                                    variant="secondary"
                                                    size="sm"
                                                >
                                                    View Profile
                                                </x-base.button>
                                            </div>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Header & Footer Dropdown -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Scrolled Dropdown -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Scrolled Dropdown</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.dropdown-menu>
                                    <x-base.dropdown-menu.trigger
                                        href="#"
                                        as="a"
                                    >
                                        <x-base.button variant="primary">
                                            <x-base.lucide icon="Compass" /> Open Dropdown
                                        </x-base.button>
                                    </x-base.dropdown-menu.trigger>
                                    <x-base.dropdown-menu.content class="h-36 w-56 overflow-y-auto">
                                        <x-base.dropdown-menu.item>PC & Laptop</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Smartphone</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Electronic</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Photography</x-base.dropdown-menu.item>
                                        <x-base.dropdown-menu.item>Sport</x-base.dropdown-menu.item>
                                    </x-base.dropdown-menu.content>
                                </x-base.dropdown-menu>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.dropdown-menu>
                                        <x-base.dropdown-menu.trigger
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.button variant="primary">
                                                <x-base.lucide icon="Compass" /> Open Dropdown
                                            </x-base.button>
                                        </x-base.dropdown-menu.trigger>
                                        <x-base.dropdown-menu.content class="h-36 w-56 overflow-y-auto">
                                            <x-base.dropdown-menu.item>PC & Laptop</x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>Smartphone</x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>Electronic</x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>Photography</x-base.dropdown-menu.item>
                                            <x-base.dropdown-menu.item>Sport</x-base.dropdown-menu.item>
                                        </x-base.dropdown-menu.content>
                                    </x-base.dropdown-menu>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Scrolled Dropdown -->
        </div>
    </div>
@endsection
