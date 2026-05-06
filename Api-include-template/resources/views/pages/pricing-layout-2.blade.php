@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Pricing - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <h2 class="mt-10 mr-auto text-2xl font-medium text-center">
        Best Price & Services
    </h2>
    <div class="mt-6">
        <x-base.tabs>
            <!-- BEGIN: Pricing Tab -->
            <div class="flex justify-center">
                <x-base.box class="p-3 mx-auto w-96">
                    <x-base.tabs.list class="mb-0">
                        <x-base.tabs.trigger>Monthly Fees</x-base.tabs.trigger>
                        <x-base.tabs.trigger>Annual Fees</x-base.tabs.trigger>
                    </x-base.tabs.list>
                </x-base.box>
            </div>
            <!-- END: Pricing Tab -->
            <!-- BEGIN: Pricing Content -->
            <x-base.tabs.contents class="flex mt-8">
                <x-base.tabs.content>
                    <div class="flex flex-col gap-5 lg:flex-row">
                        <div class="flex flex-col justify-center flex-1 pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                            <div class="text-lg font-medium">
                                Monthly Product Pricing
                            </div>
                            <div class="mt-3 indent-10 opacity-70 lg:text-justify">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever.
                                </p>
                                <p class="mt-2">
                                    When an unknown printer took a galley of type and scrambled
                                    it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                        </div>
                        <x-base.box class="flex-1 py-16">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="Briefcase"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Business
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    60
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </x-base.box>
                        <x-base.box class="flex-1 py-16">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="ShoppingBag"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Enterprise
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    120
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </x-base.box>
                    </div>
                </x-base.tabs.content>
                <x-base.tabs.content>
                    <div class="flex flex-col lg:flex-row">
                        <div class="flex flex-col justify-center flex-1 pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                            <div class="text-lg font-medium">
                                Annual Product Pricing
                            </div>
                            <div class="mt-3 opacity-70 lg:text-justify">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever.
                                </p>
                                <p class="mt-2">
                                    When an unknown printer took a galley of type and scrambled
                                    it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                        </div>
                        <x-base.box class="flex-1 py-16 mb-5 lg:mb-0 lg:ml-5">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="Briefcase"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Business
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    40
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </x-base.box>
                        <x-base.box class="flex-1 py-16 lg:ml-5">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="ShoppingBag"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Enterprise
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    90
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </x-base.box>
                    </div>
                </x-base.tabs.content>
            </x-base.tabs.contents>
        </x-base.tabs>
    </div>
    <!-- END: Pricing Content -->
    <x-base.box class="px-8 py-12 mt-20">
        <h2 class="mr-auto text-2xl font-medium text-center">
            Best Price & Services
        </h2>
        <x-base.tabs>
            <!-- BEGIN: Pricing Tab -->
            <div class="flex justify-center mt-6">
                <div class="p-2 mx-auto border w-96 rounded-2xl">
                    <x-base.tabs.list class="mb-0">
                        <x-base.tabs.trigger>Monthly Fees</x-base.tabs.trigger>
                        <x-base.tabs.trigger>Annual Fees</x-base.tabs.trigger>
                    </x-base.tabs.list>
                </div>
            </div>
            <!-- END: Pricing Tab -->
            <!-- BEGIN: Pricing Content -->
            <div class="flex mt-10">
                <x-base.tabs.content>
                    <div class="flex flex-col lg:flex-row">
                        <div class="flex flex-col justify-center flex-1 pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                            <div class="text-lg font-medium">
                                Monthly Product Pricing
                            </div>
                            <div class="mt-3 indent-10 opacity-70 lg:text-justify">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever.
                                </p>
                                <p class="mt-2">
                                    When an unknown printer took a galley of type and scrambled
                                    it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex-1 py-16 border-t border-b lg:ml-8 lg:border-b-0 lg:border-l lg:border-r lg:border-t-0">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="Briefcase"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Business
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    60
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </div>
                        <div class="flex-1 py-16">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="ShoppingBag"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Enterprise
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    120
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </div>
                    </div>
                </x-base.tabs.content>
                <x-base.tabs.content>
                    <div class="flex flex-col lg:flex-row">
                        <div class="flex flex-col justify-center flex-1 pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                            <div class="text-lg font-medium">
                                Monthly Product Pricing
                            </div>
                            <div class="mt-3 indent-10 opacity-70 lg:text-justify">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever.
                                </p>
                                <p class="mt-2">
                                    When an unknown printer took a galley of type and scrambled
                                    it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex-1 py-16 border-t border-b lg:ml-8 lg:border-b-0 lg:border-l lg:border-r lg:border-t-0">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="Briefcase"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Business
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    120
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </div>
                        <div class="flex-1 py-16">
                            <x-base.lucide
                                class="block mx-auto stroke-1 text-primary size-12"
                                icon="ShoppingBag"
                            />
                            <div class="mt-10 text-xl font-medium text-center">
                                Enterprise
                            </div>
                            <div class="mt-5 text-center opacity-70">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="px-10 mx-auto mt-2 text-center opacity-70">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-medium">
                                    <span class="absolute top-0 left-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    210
                                </div>
                            </div>
                            <x-base.button
                                class="block mx-auto mt-10 rounded-full"
                                variant="primary"
                            >
                                Purchase Now
                            </x-base.button>
                        </div>
                    </div>
                </x-base.tabs.content>
            </div>
            <!-- END: Pricing Content -->
        </x-base.tabs>
    </x-base.box>
@endsection
