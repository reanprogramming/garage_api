@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Slider - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Slider</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Single Item -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Single Item</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tiny-slider>
                                    <div>
                                        <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                            <div class="py-10 font-medium">1</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                            <div class="py-10 font-medium">2</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                            <div class="py-10 font-medium">3</div>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tiny-slider>
                                        <div>
                                            <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">1</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">2</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">3</div>
                                            </div>
                                        </div>
                                    </x-base.tiny-slider>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Single Item -->
            <!-- BEGIN: Multiple Items -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Multiple Items</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tiny-slider
                                    config="{
                                        responsive: {
                                            600: {
                                                items: 3,
                                            },
                                            480: {
                                                items: 2,
                                            },
                                        },
                                    }"
                                >
                                    <div>
                                        <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                            <div class="py-10 font-medium">1</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                            <div class="py-10 font-medium">2</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                            <div class="py-10 font-medium">3</div>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tiny-slider
                                        config="{
                                        responsive: {
                                            600: {
                                                items: 3,
                                            },
                                            480: {
                                                items: 2,
                                            },
                                        },
                                    }"
                                    >
                                        <div>
                                            <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">1</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">2</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">3</div>
                                            </div>
                                        </div>
                                    </x-base.tiny-slider>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Multiple Items -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Center Mode -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Center Mode</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <div class="overflow-hidden rounded-lg px-2">
                                    <x-base.tiny-slider
                                        config="{
                                            center: true,
                                            responsive: {
                                                600: {
                                                    items: 2,
                                                },
                                            },
                                        }"
                                    >
                                        <div>
                                            <div
                                                class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">1</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">2</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                <div class="py-10 font-medium">3</div>
                                            </div>
                                        </div>
                                    </x-base.tiny-slider>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <div class="overflow-hidden rounded-lg px-2">
                                        <x-base.tiny-slider
                                            config="{
                                                center: true,
                                                responsive: {
                                                    600: {
                                                        items: 2,
                                                    },
                                                },
                                            }"
                                        >
                                            <div>
                                                <div
                                                    class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                    <div class="py-10 font-medium">1</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                    <div class="py-10 font-medium">2</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="bg-foreground/5 flex items-center justify-center rounded-xl text-xl">
                                                    <div class="py-10 font-medium">3</div>
                                                </div>
                                            </div>
                                        </x-base.tiny-slider>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Center Mode -->
        </div>
    </div>
@endsection
