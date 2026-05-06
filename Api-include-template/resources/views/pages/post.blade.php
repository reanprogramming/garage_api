@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Add New Post - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="flex flex-col items-center mt-8 sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Add New Post</h2>
        <div class="flex w-full mt-4 sm:mt-0 sm:w-auto">
            <x-base.dropdown-menu class="mr-2">
                <x-base.dropdown-menu.trigger
                    class="flex items-center box"
                    as="x-base.button"
                >
                    English
                    <x-base.lucide
                        class="ml-2 size-4"
                        icon="ChevronDown"
                    />
                </x-base.dropdown-menu.trigger>
                <x-base.dropdown-menu.content class="w-40">
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Activity"
                        />
                        <span class="truncate">English</span>
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Activity"
                        />
                        <span class="truncate">Indonesian</span>
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
            <x-base.button
                class="flex items-center ml-auto mr-2 box sm:ml-0"
                type="button"
            >
                <x-base.lucide
                    class="mr-2 size-4"
                    icon="Eye"
                /> Preview
            </x-base.button>
            <x-base.dropdown-menu>
                <x-base.dropdown-menu.trigger
                    class="flex items-center box"
                    as="x-base.button"
                    variant="primary"
                >
                    Save
                    <x-base.lucide
                        class="ml-2 size-4"
                        icon="ChevronDown"
                    />
                </x-base.dropdown-menu.trigger>
                <x-base.dropdown-menu.content class="w-40">
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="FileText"
                        /> As New Post
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="FileText"
                        /> As Draft
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="FileText"
                        /> Export to
                        PDF
                    </x-base.dropdown-menu.item>
                    <x-base.dropdown-menu.item>
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="FileText"
                        /> Export to
                        Word
                    </x-base.dropdown-menu.item>
                </x-base.dropdown-menu.content>
            </x-base.dropdown-menu>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-8 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="col-span-12 lg:col-span-8">
            <x-base.box>
                <x-base.input
                    class="bg-foreground/[.03]"
                    type="text"
                    placeholder="Title"
                />
            </x-base.box>
            <x-base.box class="mt-8">
                <x-base.tabs>
                    <x-base.tabs.list>
                        <x-base.tabs.trigger>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="FileText"
                            /> Content
                        </x-base.tabs.trigger>
                        <x-base.tabs.trigger>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="Code"
                            /> Meta Title
                        </x-base.tabs.trigger>
                        <x-base.tabs.trigger>
                            <x-base.lucide
                                class="mr-2 size-4"
                                icon="AlignLeft"
                            /> Keywords
                        </x-base.tabs.trigger>
                    </x-base.tabs.list>
                    <x-base.tabs.contents>
                        <x-base.tabs.content class="mt-3.5">
                            <div class="p-5 border rounded-lg">
                                <div class="flex items-center pb-5 font-medium border-b">
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="ChevronDown"
                                    /> Text
                                    Content
                                </div>
                                <div class="mt-5">
                                    <x-base.ckeditor-classic>
                                        <p>Content of the editor.</p>
                                    </x-base.ckeditor-classic>
                                </div>
                            </div>
                            <div class="p-5 mt-5 border rounded-lg">
                                <div class="flex items-center pb-5 font-medium border-b">
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="ChevronDown"
                                    />
                                    Caption & Images
                                </div>
                                <div class="mt-5">
                                    <x-base.form.item>
                                        <x-base.label for="post-form-7">Caption</x-base.label>
                                        <x-base.input
                                            id="post-form-7"
                                            type="text"
                                            placeholder="Write caption"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="mt-3">
                                        <x-base.label>Upload Image</x-base.label>
                                        <div class="pt-4 border-2 border-dashed rounded-xl">
                                            <div class="flex flex-wrap px-4">
                                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                                    <div class="relative w-24 h-24 mb-5 mr-5 cursor-pointer image-fit">
                                                        <img
                                                            class="rounded-xl"
                                                            src="{{ Vite::asset($faker['images'][0]) }}"
                                                            alt="Midone - Tailwind Admin Dashboard Template"
                                                        />
                                                        <x-base.tooltip
                                                            class="bg-(--color)/80 border-(--color) text-medium absolute right-0 top-0 -mr-2 -mt-2 flex size-5 items-center justify-center rounded-full text-white [--color:var(--color-danger)]"
                                                            content="Remove this image?"
                                                        >
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="X"
                                                            />
                                                        </x-base.tooltip>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="relative flex items-center px-4 pb-4 cursor-pointer">
                                                <x-base.lucide
                                                    class="mr-2 size-4"
                                                    icon="Image"
                                                />
                                                <span class="mr-1 text-primary">
                                                    Upload a file
                                                </span>
                                                or drag and drop
                                                <x-base.input
                                                    class="absolute top-0 left-0 w-full h-full opacity-0"
                                                    type="file"
                                                />
                                            </div>
                                        </div>
                                    </x-base.form.item>
                                </div>
                            </div>
                        </x-base.tabs.content>
                    </x-base.tabs.contents>
                </x-base.tabs>
            </x-base.box>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <x-base.box class="p-5 box">
                <x-base.form.item>
                    <x-base.label>Written By</x-base.label>
                    <x-base.dropdown-menu>
                        <x-base.dropdown-menu.trigger
                            class="border-foreground/10 w-full px-2.5"
                            as="x-base.button"
                        >
                            <x-base.avatar
                                class="mr-3 size-6"
                                src="{{ Vite::asset($faker['photos'][0]) }}"
                            />
                            <div class="truncate">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <x-base.lucide
                                class="ml-auto size-4"
                                icon="ChevronDown"
                            />
                        </x-base.dropdown-menu.trigger>
                        <x-base.dropdown-menu.content class="w-96">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <x-base.dropdown-menu.item>
                                    <div class="absolute w-6 h-6 mr-3 image-fit">
                                        <img
                                            class="rounded"
                                            src="{{ Vite::asset($faker['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                    <div class="pl-1 ml-8">{{ $faker['users'][0]['name'] }}</div>
                                </x-base.dropdown-menu.item>
                            @endforeach
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="post-form-2">Post Date</x-base.label>
                    <x-base.easepick />
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="post-form-3">Categories</x-base.label>
                    <x-base.tom-select
                        class="w-full"
                        id="post-form-3"
                        multiple
                    >
                        <option
                            value="1"
                            selected
                        >Horror</option>
                        <option value="2">Sci-fi</option>
                        <option
                            value="3"
                            selected
                        >Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </x-base.tom-select>
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="post-form-4">Tags</x-base.label>
                    <x-base.tom-select
                        class="w-full"
                        id="post-form-4"
                        multiple
                    >
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
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="post-form-5">Published</x-base.label>
                    <x-base.switch
                        id="post-form-5"
                        type="checkbox"
                    />
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="post-form-6">Show Author Name</x-base.label>
                    <x-base.switch
                        id="post-form-6"
                        type="checkbox"
                    />
                </x-base.form.item>
            </x-base.box>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection
