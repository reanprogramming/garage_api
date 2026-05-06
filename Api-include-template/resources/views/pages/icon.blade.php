@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Icon - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Icon</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Lucide Icon -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Lucide Icon</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-col gap-5">
                                <div class="leading-relaxed">
                                    Check out the full list of icons in the documentation below. <a
                                        class="text-primary"
                                        href="https://lucide.dev/icons/"
                                        target="_blank"
                                    >https://lucide.dev/icons/</a>
                                </div>
                                <div
                                    class="divide-x-1 divide-y-1 grid grid-cols-5 divide-solid [&>div:nth-child(5n)]:border-r-0 [&>div:nth-last-child(-n+5)]:border-b-0">
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-primary)]"
                                                icon="Flag"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-success)]"
                                                icon="Goal"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-warning)]"
                                                icon="LandPlot"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-pending)]"
                                                icon="ShieldHalf"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-danger)]"
                                                icon="FlagOff"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-primary)]"
                                                icon="FlagTriangleLeft"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-pending)]"
                                                icon="FlagTriangleRight"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-danger)]"
                                                icon="Airplay"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-primary)]"
                                                icon="AlarmClock"
                                            />
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <x-base.lucide
                                                class="[--color:var(--color-warning)]"
                                                icon="Album"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-col gap-5">
                                    <div class="leading-relaxed">
                                        Check out the full list of icons in the documentation below. <a
                                            class="text-primary"
                                            href="https://lucide.dev/icons/"
                                            target="_blank"
                                        >https://lucide.dev/icons/</a>
                                    </div>
                                    <div
                                        class="divide-x-1 divide-y-1 grid grid-cols-5 divide-solid [&>div:nth-child(5n)]:border-r-0 [&>div:nth-last-child(-n+5)]:border-b-0">
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-primary)]"
                                                    icon="Flag"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-success)]"
                                                    icon="Goal"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-warning)]"
                                                    icon="LandPlot"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-pending)]"
                                                    icon="ShieldHalf"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-danger)]"
                                                    icon="FlagOff"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-primary)]"
                                                    icon="FlagTriangleLeft"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-pending)]"
                                                    icon="FlagTriangleRight"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-danger)]"
                                                    icon="Airplay"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-primary)]"
                                                    icon="AlarmClock"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <x-base.lucide
                                                    class="[--color:var(--color-warning)]"
                                                    icon="Album"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Lucide Icon -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Loading Icon -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Loading Icon</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-col gap-5">
                                <div class="leading-relaxed">
                                    Check out the full list of icons in the documentation below. <a
                                        class="text-primary"
                                        href="https://css-loaders.com/"
                                        target="_blank"
                                    >https://css-loaders.com/</a>
                                </div>
                                <div
                                    class="divide-x-1 divide-y-1 grid grid-cols-5 divide-solid [&>div:nth-child(5n)]:border-r-0 [&>div:nth-last-child(-n+5)]:border-b-0">
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <div class="loader-dots ![--color:--alpha(var(--color-primary)/80%)]"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-5">
                                        <div class="rounded-full border p-5">
                                            <div class="loader-spinner ![--color:--alpha(var(--color-danger)/80%)]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-col gap-5">
                                    <div class="leading-relaxed">
                                        Check out the full list of icons in the documentation below. <a
                                            class="text-primary"
                                            href="https://css-loaders.com/"
                                            target="_blank"
                                        >https://css-loaders.com/</a>
                                    </div>
                                    <div
                                        class="divide-x-1 divide-y-1 grid grid-cols-5 divide-solid [&>div:nth-child(5n)]:border-r-0 [&>div:nth-last-child(-n+5)]:border-b-0">
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <div class="loader-dots ![--color:--alpha(var(--color-primary)/80%)]"></div>
                                            </div>
                                        </div>
                                        <div class="flex justify-center py-5">
                                            <div class="rounded-full border p-5">
                                                <div class="loader-spinner ![--color:--alpha(var(--color-danger)/80%)]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Loading Icon -->
        </div>
    </div>
@endsection
