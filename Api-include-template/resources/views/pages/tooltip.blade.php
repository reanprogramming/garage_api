@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Progress - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Tooltip</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Tooltip -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Tooltip</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.avatar
                                    class="bg-background size-16 cursor-pointer transition-all hover:scale-110"
                                    src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                    title="{{ 'Hi, my name is ' . $fakers[0]['users'][0]['name'] . '... 😊😊😊' }}"
                                />
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.avatar
                                        class="bg-background size-16 cursor-pointer transition-all hover:scale-110"
                                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                        title="{{ 'Hi, my name is ' . $fakers[0]['users'][0]['name'] . '... 😊😊😊' }}"
                                    />
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Tooltip -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">

        </div>
    </div>
@endsection
