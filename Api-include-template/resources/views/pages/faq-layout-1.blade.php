@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>FAQ - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">FAQ Layout</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-x-6 gap-y-8">
        <!-- BEGIN: FAQ Menu -->
        <x-base.box
            class="active [&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 col-span-12 py-10 [--color:var(--color-primary)] lg:col-span-4"
            href=""
            as="a"
        >
            <x-base.lucide
                class="text-primary mx-auto block size-12 stroke-1"
                icon="Shield"
            />
            <div class="mt-3 text-center text-base font-medium">
                Single Application
            </div>
            <div class="mx-auto mt-2 w-3/4 text-center opacity-70">
                Lorem Ipsum is simply dummy text of the printing
            </div>
        </x-base.box>
        <x-base.box
            class="[&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 col-span-12 py-10 [--color:var(--color-primary)] lg:col-span-4"
            href=""
            as="a"
        >
            <x-base.lucide
                class="text-primary mx-auto block size-12 stroke-1"
                icon="Send"
            />
            <div class="mt-3 text-center text-base font-medium">
                Multi Application
            </div>
            <div class="mx-auto mt-2 w-3/4 text-center opacity-70">
                Lorem Ipsum is simply dummy text of the printing
            </div>
        </x-base.box>
        <x-base.box
            class="[&.active]:before:bg-(--color)/5 [&.active]:before:border-(--color)/20 [&.active]:after:bg-(--color)/5 [&.active]:after:border-(--color)/20 col-span-12 py-10 [--color:var(--color-primary)] lg:col-span-4"
            href=""
            as="a"
        >
            <x-base.lucide
                class="text-primary mx-auto block size-12 stroke-1"
                icon="TrendingUp"
            />
            <div class="mt-3 text-center text-base font-medium">
                Custom License
            </div>
            <div class="mx-auto mt-2 w-3/4 text-center opacity-70">
                Lorem Ipsum is simply dummy text of the printing
            </div>
        </x-base.box>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="col-span-12 lg:col-span-6">
            <x-base.box class="p-0">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <div class="p-5">
                    <x-base.accordion class="border-none">
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                How To Troubleshoot Common HTTP Error Codes
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                An Introduction to Securing your Linux VPS
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                    </x-base.accordion>
                </div>
            </x-base.box>
            <x-base.box class="mt-8 p-0">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <div class="p-5">
                    <x-base.accordion class="border-none">
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                How To Troubleshoot Common HTTP Error Codes
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                An Introduction to Securing your Linux VPS
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                    </x-base.accordion>
                </div>
            </x-base.box>
        </div>
        <div class="col-span-12 lg:col-span-6">
            <x-base.box class="p-0">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <div class="p-5">
                    <x-base.accordion class="border-none">
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                How To Troubleshoot Common HTTP Error Codes
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                An Introduction to Securing your Linux VPS
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                    </x-base.accordion>
                </div>
            </x-base.box>
            <x-base.box class="mt-8 p-0">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <div class="p-5">
                    <x-base.accordion class="border-none">
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                How To Troubleshoot Common HTTP Error Codes
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                        <x-base.accordion.item>
                            <x-base.accordion.trigger>
                                An Introduction to Securing your Linux VPS
                            </x-base.accordion.trigger>
                            <x-base.accordion.content>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged.
                            </x-base.accordion.content>
                        </x-base.accordion.item>
                    </x-base.accordion>
                </div>
            </x-base.box>
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection
