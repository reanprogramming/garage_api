@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Accordion - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Accordion</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Accordion -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Accordion</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
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
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
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
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Accordion -->
        </div>
    </div>
@endsection
