@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Dropzone - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Dropzone</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Single File -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Single File</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.dropzone
                                    config="{ single: true }"
                                    action="/file-upload"
                                >
                                    <div class="text-lg font-medium">
                                        Drop files here or click to upload.
                                    </div>
                                    <div class="opacity-70">
                                        This is just a demo dropzone. Selected files are
                                        <span class="font-medium">not</span> actually
                                        uploaded.
                                    </div>
                                </x-base.dropzone>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.dropzone
                                        config="{ single: true }"
                                        action="/file-upload"
                                    >
                                        <div class="text-lg font-medium">
                                            Drop files here or click to upload.
                                        </div>
                                        <div class="opacity-70">
                                            This is just a demo dropzone. Selected files are
                                            <span class="font-medium">not</span> actually
                                            uploaded.
                                        </div>
                                    </x-base.dropzone>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Single File -->
            <!-- BEGIN: Multiple File -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Multiple File</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.dropzone action="/file-upload">
                                    <div class="text-lg font-medium">
                                        Drop files here or click to upload.
                                    </div>
                                    <div class="opacity-70">
                                        This is just a demo dropzone. Selected files are
                                        <span class="font-medium">not</span> actually
                                        uploaded.
                                    </div>
                                </x-base.dropzone>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.dropzone action="/file-upload">
                                        <div class="text-lg font-medium">
                                            Drop files here or click to upload.
                                        </div>
                                        <div class="opacity-70">
                                            This is just a demo dropzone. Selected files are
                                            <span class="font-medium">not</span> actually
                                            uploaded.
                                        </div>
                                    </x-base.dropzone>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Multiple File -->
            <!-- BEGIN: File Validation -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">File Validation</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <x-base.dropzone
                                    config="{ fileTypes: 'image/jpeg|image/png|image/jpg' }"
                                    action="/file-upload"
                                >
                                    <div class="text-lg font-medium">
                                        Drop files here or click to upload.
                                    </div>
                                    <div class="opacity-70">
                                        This is just a demo dropzone. Selected files are
                                        <span class="font-medium">not</span> actually
                                        uploaded.
                                    </div>
                                </x-base.dropzone>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.dropzone
                                        config="{ fileTypes: 'image/jpeg|image/png|image/jpg' }"
                                        action="/file-upload"
                                    >
                                        <div class="text-lg font-medium">
                                            Drop files here or click to upload.
                                        </div>
                                        <div class="opacity-70">
                                            This is just a demo dropzone. Selected files are
                                            <span class="font-medium">not</span> actually
                                            uploaded.
                                        </div>
                                    </x-base.dropzone>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: File Validation -->
        </div>
    </div>
@endsection
