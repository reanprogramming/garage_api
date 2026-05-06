@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tabulator - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Tabulator</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="box mr-2"
                variant="primary"
            >
                Add New Product
            </x-base.button>
            <x-base.dropdown-menu class="ml-auto sm:ml-0">
                <x-base.dropdown-menu.trigger
                    class="box px-2 font-normal"
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
                            icon="FilePlus"
                        /> New Category
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="UserPlus"
                        /> New Group
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <x-base.box class="mt-5 p-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form
                class="sm:mr-auto xl:flex"
                id="tabulator-html-filter-form"
            >
                <div class="items-center sm:mr-4 sm:flex">
                    <label class="mr-2 w-12 flex-none xl:w-auto xl:flex-initial">
                        Field
                    </label>
                    <x-base.select
                        class="mt-2 w-full sm:mt-0 sm:w-auto 2xl:w-full"
                        id="tabulator-html-filter-field"
                    >
                        <option value="name">Name</option>
                        <option value="category">Category</option>
                        <option value="remaining_stock">Remaining Stock</option>
                    </x-base.select>
                </div>
                <div class="mt-2 items-center sm:mr-4 sm:flex xl:mt-0">
                    <label class="mr-2 w-12 flex-none xl:w-auto xl:flex-initial">
                        Type
                    </label>
                    <x-base.select
                        class="mt-2 w-full sm:mt-0 sm:w-auto"
                        id="tabulator-html-filter-type"
                    >
                        <option value="like">like</option>
                        <option value="=">=</option>
                        <option value="<">&lt;</option>
                        <option value="<=">&lt;=</option>
                        <option value=">">&gt;</option>
                        <option value=">=">&gt;=</option>
                        <option value="!=">!=</option>
                    </x-base.select>
                </div>
                <div class="mt-2 items-center sm:mr-4 sm:flex xl:mt-0">
                    <label class="mr-2 w-12 flex-none xl:w-auto xl:flex-initial">
                        Value
                    </label>
                    <x-base.input
                        class="mt-2 sm:mt-0 sm:w-40 2xl:w-full"
                        id="tabulator-html-filter-value"
                        type="text"
                        placeholder="Search..."
                    />
                </div>
                <div class="mt-2 xl:mt-0">
                    <x-base.button
                        class="w-full sm:w-16"
                        id="tabulator-html-filter-go"
                        type="button"
                        variant="primary"
                    >
                        Go
                    </x-base.button>
                    <x-base.button
                        class="mt-2 w-full sm:ml-1 sm:mt-0 sm:w-16"
                        id="tabulator-html-filter-reset"
                        type="button"
                    >
                        Reset
                    </x-base.button>
                </div>
            </form>
            <div class="mt-5 flex sm:mt-0">
                <x-base.button
                    class="mr-2 w-1/2 sm:w-auto"
                    id="tabulator-print"
                >
                    <x-base.lucide
                        class="mr-2 size-4"
                        icon="Printer"
                    /> Print
                </x-base.button>
                <x-base.dropdown-menu class="w-1/2 sm:w-auto">
                    <x-base.dropdown-menu.trigger
                        class="w-full sm:w-auto"
                        as="x-base.button"
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="FileText"
                        /> Export
                        <x-base.lucide
                            class="ml-auto size-4 sm:ml-2"
                            icon="ChevronDown"
                        />
                    </x-base.dropdown-menu.trigger>
                    <x-base.dropdown-menu.content class="w-40">
                        <x-base.dropdown-menu.item id="tabulator-export-csv">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Export CSV
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item id="tabulator-export-json">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Export
                            JSON
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item id="tabulator-export-xlsx">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Export
                            XLSX
                        </x-base.dropdown-menu.item>
                        <x-base.dropdown-menu.item id="tabulator-export-html">
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Export
                            HTML
                        </x-base.dropdown-menu.item>
                    </x-base.dropdown-menu.content>
                </x-base.dropdown-menu>
            </div>
        </div>
        <div class="scrollbar-hidden overflow-x-auto">
            <div
                class="mt-5"
                id="tabulator"
            ></div>
        </div>
    </x-base.box>
    <!-- END: HTML Table Data -->
@endsection

@pushOnce('styles')
    @vite('resources/css/vendors/tabulator.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tabulator.js')
    @vite('resources/js/vendors/xlsx.js')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/pages/tabulator.js')
@endPushOnce
