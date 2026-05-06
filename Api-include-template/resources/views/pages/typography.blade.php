@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Typography - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Typography</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Heading -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Heading</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <div class="prose">
                                    <h6 class="text-foreground">H6 —
                                        All About Bread: From Classic Loaves to Trendy Bakes</h6>
                                    <h5 class="text-foreground">H5 —
                                        All About Bread: From Classic Loaves to Trendy Bakes</h5>
                                    <h4 class="text-foreground">H4 —
                                        All About Bread: From Classic Loaves to Trendy Bakes</h4>
                                    <h3 class="text-foreground">H3 —
                                        All About Bread: From Classic Loaves to Trendy Bakes</h3>
                                    <h2 class="text-foreground">H2 —
                                        All About Bread: From Classic Loaves to Trendy Bakes</h2>
                                    <h1 class="text-foreground">H1 —
                                        All About Bread: From Classic Loaves to Trendy Bakes</h1>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <div class="prose">
                                        <h6 class="text-foreground">H6 —
                                            All About Bread: From Classic Loaves to Trendy Bakes</h6>
                                        <h5 class="text-foreground">H5 —
                                            All About Bread: From Classic Loaves to Trendy Bakes</h5>
                                        <h4 class="text-foreground">H4 —
                                            All About Bread: From Classic Loaves to Trendy Bakes</h4>
                                        <h3 class="text-foreground">H3 —
                                            All About Bread: From Classic Loaves to Trendy Bakes</h3>
                                        <h2 class="text-foreground">H2 —
                                            All About Bread: From Classic Loaves to Trendy Bakes</h2>
                                        <h1 class="text-foreground">H1 —
                                            All About Bread: From Classic Loaves to Trendy Bakes</h1>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Heading -->
            <!-- BEGIN: Font Weight -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Font Weight</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <div class="prose">
                                    <div class="text-foreground font-thin">Thin —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-extralight">Extralight —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-light">Light —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-normal">Normal —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-medium">Medium —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-semibold">Semibold —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-bold">Bold —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-extrabold">Extrabold —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    <div class="text-foreground font-black">Black —
                                        All About Bread: From Classic Loaves to Trendy Bakes</div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <div class="prose text-foreground">
                                        <div class="text-foreground font-thin">Thin —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-extralight">Extralight —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-light">Light —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-normal">Normal —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-medium">Medium —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-semibold">Semibold —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-bold">Bold —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-extrabold">Extrabold —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                        <div class="text-foreground font-black">Black —
                                            All About Bread: From Classic Loaves to Trendy Bakes</div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Font Weight -->
            <!-- BEGIN: Text Transform -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Text Transform</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <div class="prose">
                                    <div class="text-foreground uppercase">
                                        <span class="font-bold">Uppercase</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                    <div class="text-foreground lowercase">
                                        <span class="font-bold">Lowercase</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                    <div class="text-foreground capitalize">
                                        <span class="font-bold">Capitalize</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                    <div class="text-foreground normal-case">
                                        <span class="font-bold">Normal Case</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <div class="prose">
                                        <div class="text-foreground uppercase">
                                            <span class="font-bold">Uppercase</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                        <div class="text-foreground lowercase">
                                            <span class="font-bold">Lowercase</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                        <div class="text-foreground capitalize">
                                            <span class="font-bold">Capitalize</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                        <div class="text-foreground normal-case">
                                            <span class="font-bold">Normal Case</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Text Transform -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Badge -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Badge</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex flex-col gap-y-8">
                                <x-base.box class="space-y-5 divide-y">
                                    <div class="pb-3 text-base font-medium">Colors</div>
                                    <div class="flex flex-wrap gap-3">
                                        <x-base.badge class="[--color:var(--color-primary)]">120+ New Users</x-base.badge>
                                        <x-base.badge class="[--color:var(--color-success)]">500+ Active
                                            Members</x-base.badge>
                                        <x-base.badge class="[--color:var(--color-warning)]">75+ Orders Today</x-base.badge>
                                        <x-base.badge class="[--color:var(--color-pending)]">1.2K+ Downloads</x-base.badge>
                                        <x-base.badge class="[--color:var(--color-danger)]">300+ Reviews
                                            Added</x-base.badge>
                                    </div>
                                </x-base.box>
                                <x-base.box class="space-y-5 divide-y">
                                    <div class="pb-3 text-base font-medium">Sizing</div>
                                    <div class="flex flex-wrap gap-3">
                                        <x-base.badge class="px-2 py-0.5 [--color:var(--color-primary)]">120+ New
                                            Users</x-base.badge>
                                        <x-base.badge class="px-3 py-1 [--color:var(--color-success)]">500+ Active
                                            Members</x-base.badge>
                                        <x-base.badge class="px-4 py-1.5 [--color:var(--color-warning)]">75+ Orders
                                            Today</x-base.badge>
                                        <x-base.badge class="px-5 py-2 [--color:var(--color-pending)]">1.2K+
                                            Downloads</x-base.badge>
                                        <x-base.badge class="px-6 py-2.5 [--color:var(--color-danger)]">300+ Reviews
                                            Added</x-base.badge>
                                    </div>
                                </x-base.box>
                                <x-base.box class="space-y-5 divide-y">
                                    <div class="pb-3 text-base font-medium">Rounded</div>
                                    <div class="flex flex-wrap gap-3">
                                        <x-base.badge class="rounded-xs [--color:var(--color-primary)]">120+ New
                                            Users</x-base.badge>
                                        <x-base.badge class="rounded-sm [--color:var(--color-success)]">500+ Active
                                            Members</x-base.badge>
                                        <x-base.badge class="rounded-md [--color:var(--color-warning)]">75+ Orders
                                            Today</x-base.badge>
                                        <x-base.badge class="rounded-lg [--color:var(--color-pending)]">1.2K+
                                            Downloads</x-base.badge>
                                        <x-base.badge class="rounded-xl [--color:var(--color-danger)]">300+ Reviews
                                            Added</x-base.badge>
                                    </div>
                                </x-base.box>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex flex-col gap-y-8">
                                    <x-base.box class="space-y-5 divide-y">
                                        <div class="pb-3 text-base font-medium">Colors</div>
                                        <div class="flex flex-wrap gap-3">
                                            <x-base.badge class="[--color:var(--color-primary)]">120+ New Users</x-base.badge>
                                            <x-base.badge class="[--color:var(--color-success)]">500+ Active
                                                Members</x-base.badge>
                                            <x-base.badge class="[--color:var(--color-warning)]">75+ Orders
                                                Today</x-base.badge>
                                            <x-base.badge class="[--color:var(--color-pending)]">1.2K+ Downloads</x-base.badge>
                                            <x-base.badge class="[--color:var(--color-danger)]">300+ Reviews
                                                Added</x-base.badge>
                                        </div>
                                    </x-base.box>
                                    <x-base.box class="space-y-5 divide-y">
                                        <div class="pb-3 text-base font-medium">Sizing</div>
                                        <div class="flex flex-wrap gap-3">
                                            <x-base.badge class="px-2 py-0.5 [--color:var(--color-primary)]">120+ New
                                                Users</x-base.badge>
                                            <x-base.badge class="px-3 py-1 [--color:var(--color-success)]">500+ Active
                                                Members</x-base.badge>
                                            <x-base.badge class="px-4 py-1.5 [--color:var(--color-warning)]">75+ Orders
                                                Today</x-base.badge>
                                            <x-base.badge class="px-5 py-2 [--color:var(--color-pending)]">1.2K+
                                                Downloads</x-base.badge>
                                            <x-base.badge class="px-6 py-2.5 [--color:var(--color-danger)]">300+ Reviews
                                                Added</x-base.badge>
                                        </div>
                                    </x-base.box>
                                    <x-base.box class="space-y-5 divide-y">
                                        <div class="pb-3 text-base font-medium">Rounded</div>
                                        <div class="flex flex-wrap gap-3">
                                            <x-base.badge class="rounded-xs [--color:var(--color-primary)]">120+ New
                                                Users</x-base.badge>
                                            <x-base.badge class="rounded-sm [--color:var(--color-success)]">500+ Active
                                                Members</x-base.badge>
                                            <x-base.badge class="rounded-md [--color:var(--color-warning)]">75+ Orders
                                                Today</x-base.badge>
                                            <x-base.badge class="rounded-lg [--color:var(--color-pending)]">1.2K+
                                                Downloads</x-base.badge>
                                            <x-base.badge class="rounded-xl [--color:var(--color-danger)]">300+ Reviews
                                                Added</x-base.badge>
                                        </div>
                                    </x-base.box>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Badge -->
            <!-- BEGIN: Text Decoration -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Text Decoration</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <div class="prose">
                                    <div class="text-foreground underline">
                                        <span class="font-bold">Underline</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                    <div class="text-foreground overline">
                                        <span class="font-bold">Overline</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                    <div class="text-foreground line-through">
                                        <span class="font-bold">Line Through</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                    <div class="text-foreground no-underline">
                                        <span class="font-bold">No Underline</span> —
                                        All About Bread: From Classic Loaves to Trendy Bakes
                                    </div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <div class="prose">
                                        <div class="text-foreground underline">
                                            <span class="font-bold">Underline</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                        <div class="text-foreground overline">
                                            <span class="font-bold">Overline</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                        <div class="text-foreground line-through">
                                            <span class="font-bold">Line Through</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                        <div class="text-foreground no-underline">
                                            <span class="font-bold">No Underline</span> —
                                            All About Bread: From Classic Loaves to Trendy Bakes
                                        </div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Text Decoration -->
        </div>
    </div>
@endsection
