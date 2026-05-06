@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tom Select - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Tom Select</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Select -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Select</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tom-select>
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option
                                        value="2"
                                        selected
                                    >Johnny Deep</option>
                                    <option value="3">Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </x-base.tom-select>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tom-select>
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option
                                            value="2"
                                            selected
                                        >Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </x-base.tom-select>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Select -->
            <!-- BEGIN: Nested Select -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Nested Select</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tom-select>
                                    <optgroup label="American Actors">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </optgroup>
                                    <optgroup label="American Actresses">
                                        <option value="6">Scarlett Johansson</option>
                                        <option value="7">Jessica Alba</option>
                                        <option value="8">Jennifer Lawrence</option>
                                        <option value="9">Emma Stone</option>
                                        <option value="10">Angelina Jolie</option>
                                    </optgroup>
                                </x-base.tom-select>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tom-select>
                                        <optgroup label="American Actors">
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </optgroup>
                                        <optgroup label="American Actresses">
                                            <option value="6">Scarlett Johansson</option>
                                            <option value="7">Jessica Alba</option>
                                            <option value="8">Jennifer Lawrence</option>
                                            <option value="9">Emma Stone</option>
                                            <option value="10">Angelina Jolie</option>
                                        </optgroup>
                                    </x-base.tom-select>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Nested Select -->
            <!-- BEGIN: Multiple Values -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Multiple Values</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tom-select multiple>
                                    <option
                                        value="1"
                                        selected
                                    >Leonardo DiCaprio</option>
                                    <option value="2">Johnny Deep</option>
                                    <option
                                        value="3"
                                        selected
                                    >Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </x-base.tom-select>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tom-select multiple>
                                        <option
                                            value="1"
                                            selected
                                        >Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option
                                            value="3"
                                            selected
                                        >Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </x-base.tom-select>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Multiple Values -->
            <!-- BEGIN: Select with Header -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Select with Header</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tom-select config="{ header: 'Actors' }">
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option
                                        value="2"
                                        selected
                                    >Johnny Deep</option>
                                    <option value="3">Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </x-base.tom-select>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tom-select config="{ header: 'Actors' }">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option
                                            value="2"
                                            selected
                                        >Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </x-base.tom-select>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Select with Header -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Select Group -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Select Group</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.form.group>
                                    <div
                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                        @</div>
                                    <x-base.tom-select>
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option
                                            value="2"
                                            selected
                                        >Johnny Deep</option>
                                        <option
                                            value="3"
                                            selected
                                        >Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option
                                            value="5"
                                            selected
                                        >Morgan Freeman</option>
                                    </x-base.tom-select>
                                </x-base.form.group>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.form.group>
                                        <div
                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                            @</div>
                                        <x-base.tom-select>
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option
                                                value="2"
                                                selected
                                            >Johnny Deep</option>
                                            <option
                                                value="3"
                                                selected
                                            >Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option
                                                value="5"
                                                selected
                                            >Morgan Freeman</option>
                                        </x-base.tom-select>
                                    </x-base.form.group>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Select Group -->
            <!-- BEGIN: Disabled Select -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Disabled Select</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tom-select disabled>
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option
                                        value="2"
                                        selected
                                    >Johnny Deep</option>
                                    <option
                                        value="3"
                                        selected
                                    >Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option
                                        value="5"
                                        selected
                                    >Morgan Freeman</option>
                                </x-base.tom-select>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tom-select disabled>
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option
                                            value="2"
                                            selected
                                        >Johnny Deep</option>
                                        <option
                                            value="3"
                                            selected
                                        >Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option
                                            value="5"
                                            selected
                                        >Morgan Freeman</option>
                                    </x-base.tom-select>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Disabled Select -->
            <!-- BEGIN: Disabled Options -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Disabled Options</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.tom-select>
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option
                                        value="2"
                                        selected
                                    >Johnny Deep</option>
                                    <option
                                        value="3"
                                        disabled
                                    >Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </x-base.tom-select>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.tom-select>
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option
                                            value="2"
                                            selected
                                        >Johnny Deep</option>
                                        <option
                                            value="3"
                                            disabled
                                        >Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </x-base.tom-select>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Disabled Options -->
        </div>
    </div>
@endsection
