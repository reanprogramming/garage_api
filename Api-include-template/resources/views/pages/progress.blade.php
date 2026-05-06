@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Progress - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Progress</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Progress -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Progress</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-col gap-4">
                                <x-base.progress class="[--value:15%]" />
                                <x-base.progress class="[--value:75%]" />
                                <x-base.progress class="[--value:35%]" />
                                <x-base.progress class="[--value:45%]" />
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-col gap-4">
                                    <x-base.progress class="[--value:15%]" />
                                    <x-base.progress class="[--value:75%]" />
                                    <x-base.progress class="[--value:35%]" />
                                    <x-base.progress class="[--value:45%]" />
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Progress -->
            <!-- BEGIN: Custom Progress Color -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Custom Progress Color</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-col gap-4">
                                <x-base.progress class="[--color:var(--color-success)] [--value:15%]" />
                                <x-base.progress class="[--color:var(--color-warning)] [--value:75%]" />
                                <x-base.progress class="[--color:var(--color-danger)] [--value:35%]" />
                                <x-base.progress class="[--color:var(--color-pending)] [--value:45%]" />
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-col gap-4">
                                    <x-base.progress class="[--color:var(--color-success)] [--value:15%]" />
                                    <x-base.progress class="[--color:var(--color-warning)] [--value:75%]" />
                                    <x-base.progress class="[--color:var(--color-danger)] [--value:35%]" />
                                    <x-base.progress class="[--color:var(--color-pending)] [--value:45%]" />
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Custom Progress Color -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">

        </div>
    </div>
@endsection
