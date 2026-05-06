@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Regular Table - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Regular Table</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Table -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Table</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                            <x-base.table
                                class="mt-5"
                                dark
                            >
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                                <x-base.table
                                    class="mt-5"
                                    dark
                                >
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Table -->
            <!-- BEGIN: Hoverable Table -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Hoverable Table</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr
                                        class="[&:hover>td]:before:bg-accent [&:hover>td]:relative [&:hover>td]:before:absolute [&:hover>td]:before:inset-0 [&:hover>td]:before:z-[-1] [&:hover>td]:before:blur-lg"
                                    >
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr
                                        class="[&:hover>td]:before:bg-accent [&:hover>td]:relative [&:hover>td]:before:absolute [&:hover>td]:before:inset-0 [&:hover>td]:before:z-[-1] [&:hover>td]:before:blur-lg"
                                    >
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr
                                        class="[&:hover>td]:before:bg-accent [&:hover>td]:relative [&:hover>td]:before:absolute [&:hover>td]:before:inset-0 [&:hover>td]:before:z-[-1] [&:hover>td]:before:blur-lg"
                                    >
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr
                                            class="[&:hover>td]:before:bg-accent [&:hover>td]:relative [&:hover>td]:before:absolute [&:hover>td]:before:inset-0 [&:hover>td]:before:z-[-1] [&:hover>td]:before:blur-lg"
                                        >
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr
                                            class="[&:hover>td]:before:bg-accent [&:hover>td]:relative [&:hover>td]:before:absolute [&:hover>td]:before:inset-0 [&:hover>td]:before:z-[-1] [&:hover>td]:before:blur-lg"
                                        >
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr
                                            class="[&:hover>td]:before:bg-accent [&:hover>td]:relative [&:hover>td]:before:absolute [&:hover>td]:before:inset-0 [&:hover>td]:before:z-[-1] [&:hover>td]:before:blur-lg"
                                        >
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Hoverable Table -->
            <!-- BEGIN: Table Row States -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Table Row States</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr
                                        class="[&>td]:before:bg-(--color)/20 [&>td]:before:border-(--color)/60 [&>td]:text-(--color) [--color:var(--color-primary)] [&>td:first-child]:before:border-s [&>td:last-child]:before:border-e [&>td]:relative [&>td]:before:absolute [&>td]:before:inset-0 [&>td]:before:z-[-1] [&>td]:before:border-y"
                                    >
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr
                                        class="[&>td]:before:bg-(--color)/20 [&>td]:before:border-(--color)/60 [&>td]:text-(--color) [--color:var(--color-danger)] [&>td:first-child]:before:border-s [&>td:last-child]:before:border-e [&>td]:relative [&>td]:before:absolute [&>td]:before:inset-0 [&>td]:before:z-[-1] [&>td]:before:border-y"
                                    >
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr
                                        class="[&>td]:before:bg-(--color)/20 [&>td]:before:border-(--color)/60 [&>td]:text-(--color) [--color:var(--color-pending)] [&>td:first-child]:before:border-s [&>td:last-child]:before:border-e [&>td]:relative [&>td]:before:absolute [&>td]:before:inset-0 [&>td]:before:z-[-1] [&>td]:before:border-y"
                                    >
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr
                                            class="[&>td]:before:bg-(--color)/20 [&>td]:before:border-(--color)/60 [&>td]:text-(--color) [--color:var(--color-primary)] [&>td:first-child]:before:border-s [&>td:last-child]:before:border-e [&>td]:relative [&>td]:before:absolute [&>td]:before:inset-0 [&>td]:before:z-[-1] [&>td]:before:border-y"
                                        >
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr
                                            class="[&>td]:before:bg-(--color)/20 [&>td]:before:border-(--color)/60 [&>td]:text-(--color) [--color:var(--color-danger)] [&>td:first-child]:before:border-s [&>td:last-child]:before:border-e [&>td]:relative [&>td]:before:absolute [&>td]:before:inset-0 [&>td]:before:z-[-1] [&>td]:before:border-y"
                                        >
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr
                                            class="[&>td]:before:bg-(--color)/20 [&>td]:before:border-(--color)/60 [&>td]:text-(--color) [--color:var(--color-pending)] [&>td:first-child]:before:border-s [&>td:last-child]:before:border-e [&>td]:relative [&>td]:before:absolute [&>td]:before:inset-0 [&>td]:before:z-[-1] [&>td]:before:border-y"
                                        >
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Table Row States -->
            <!-- BEGIN: Small Table -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Small Table</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr class="[&>th]:h-9">
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr class="[&>td]:py-2">
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr class="[&>td]:py-2">
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr class="[&>td]:py-2">
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr class="[&>th]:h-9">
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr class="[&>td]:py-2">
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr class="[&>td]:py-2">
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr class="[&>td]:py-2">
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Small Table -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Table Head Options -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Table Head Options</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr
                                        class="[&>th]:before:bg-(--bg-color)/70 [&>th]:before:border-(--bg-color) [&>th]:text-(--text-color) [--bg-color:var(--color-slate-800)] [--text-color:var(--color-white)] [&>th:first-child]:before:border-s [&>th:last-child]:before:border-e [&>th]:relative [&>th]:bg-transparent [&>th]:before:absolute [&>th]:before:inset-0 [&>th]:before:z-[-1] [&>th]:before:border-y [&>th]:before:shadow-xl"
                                    >
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                            <x-base.table class="mt-5">
                                <x-base.table.thead>
                                    <x-base.table.tr
                                        class="[&>th]:before:bg-(--bg-color)/60 [&>th]:before:border-(--bg-color) [&>th]:text-(--text-color) [--bg-color:var(--color-white)] [--text-color:var(--color-slate-800)] [&>th:first-child]:before:border-s [&>th:last-child]:before:border-e [&>th]:relative [&>th]:bg-transparent [&>th]:before:absolute [&>th]:before:inset-0 [&>th]:before:z-[-1] [&>th]:before:border-y [&>th]:before:shadow-xl"
                                    >
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr
                                            class="[&>th]:before:bg-(--bg-color)/70 [&>th]:before:border-(--bg-color) [&>th]:text-(--text-color) [--bg-color:var(--color-slate-800)] [--text-color:var(--color-white)] [&>th:first-child]:before:border-s [&>th:last-child]:before:border-e [&>th]:relative [&>th]:bg-transparent [&>th]:before:absolute [&>th]:before:inset-0 [&>th]:before:z-[-1] [&>th]:before:border-y [&>th]:before:shadow-xl"
                                        >
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                                <x-base.table class="mt-5">
                                    <x-base.table.thead>
                                        <x-base.table.tr
                                            class="[&>th]:before:bg-(--bg-color)/60 [&>th]:before:border-(--bg-color) [&>th]:text-(--text-color) [--bg-color:var(--color-white)] [--text-color:var(--color-slate-800)] [&>th:first-child]:before:border-s [&>th:last-child]:before:border-e [&>th]:relative [&>th]:bg-transparent [&>th]:before:absolute [&>th]:before:inset-0 [&>th]:before:z-[-1] [&>th]:before:border-y [&>th]:before:shadow-xl"
                                        >
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Table Head Options -->
            <!-- BEGIN: Responsive Table -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Responsive Table</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Email
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Address
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td class="whitespace-nowrap">1</x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Angelina
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Jolie
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            @angelinajolie
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            angelinajolie@gmail.com
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            260 W. Storm Street New York, NY 10025.
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td class="whitespace-nowrap">2</x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Brad
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Pitt
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            @bradpitt
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            bradpitt@gmail.com
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            47 Division St. Buffalo, NY 14241.
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td class="whitespace-nowrap">3</x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Charlie
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Hunnam
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            @charliehunnam
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            charliehunnam@gmail.com
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            8023 Amerige Street Harriman, NY 10926.
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Email
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Address
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td class="whitespace-nowrap">1</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Angelina
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Jolie
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                @angelinajolie
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                angelinajolie@gmail.com
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                260 W. Storm Street New York, NY 10025.
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td class="whitespace-nowrap">2</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Brad
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Pitt
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                @bradpitt
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                bradpitt@gmail.com
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                47 Division St. Buffalo, NY 14241.
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td class="whitespace-nowrap">3</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Charlie
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Hunnam
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                @charliehunnam
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                charliehunnam@gmail.com
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                8023 Amerige Street Harriman, NY 10926.
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Responsive Table -->
            <!-- BEGIN: Striped Rows -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Striped Rows</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th>#</x-base.table.th>
                                        <x-base.table.th>
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th>
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr
                                        class="[&:nth-child(odd)>td]:before:bg-(--color)/10 [&:nth-child(odd)>td]:text-(--color) [--color:var(--color-foreground)] [&:nth-child(odd)>td]:relative [&:nth-child(odd)>td]:before:absolute [&:nth-child(odd)>td]:before:inset-0 [&:nth-child(odd)>td]:before:z-[-1]"
                                    >
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr
                                        class="[&:nth-child(odd)>td]:before:bg-(--color)/10 [&:nth-child(odd)>td]:text-(--color) [--color:var(--color-foreground)] [&:nth-child(odd)>td]:relative [&:nth-child(odd)>td]:before:absolute [&:nth-child(odd)>td]:before:inset-0 [&:nth-child(odd)>td]:before:z-[-1]"
                                    >
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr
                                        class="[&:nth-child(odd)>td]:before:bg-(--color)/10 [&:nth-child(odd)>td]:text-(--color) [--color:var(--color-foreground)] [&:nth-child(odd)>td]:relative [&:nth-child(odd)>td]:before:absolute [&:nth-child(odd)>td]:before:inset-0 [&:nth-child(odd)>td]:before:z-[-1]"
                                    >
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th>#</x-base.table.th>
                                            <x-base.table.th>
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr
                                            class="[&:nth-child(odd)>td]:before:bg-(--color)/10 [&:nth-child(odd)>td]:text-(--color) [--color:var(--color-foreground)] [&:nth-child(odd)>td]:relative [&:nth-child(odd)>td]:before:absolute [&:nth-child(odd)>td]:before:inset-0 [&:nth-child(odd)>td]:before:z-[-1]"
                                        >
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr
                                            class="[&:nth-child(odd)>td]:before:bg-(--color)/10 [&:nth-child(odd)>td]:text-(--color) [--color:var(--color-foreground)] [&:nth-child(odd)>td]:relative [&:nth-child(odd)>td]:before:absolute [&:nth-child(odd)>td]:before:inset-0 [&:nth-child(odd)>td]:before:z-[-1]"
                                        >
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr
                                            class="[&:nth-child(odd)>td]:before:bg-(--color)/10 [&:nth-child(odd)>td]:text-(--color) [--color:var(--color-foreground)] [&:nth-child(odd)>td]:relative [&:nth-child(odd)>td]:before:absolute [&:nth-child(odd)>td]:before:inset-0 [&:nth-child(odd)>td]:before:z-[-1]"
                                        >
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Striped Rows -->
        </div>
    </div>
@endsection
