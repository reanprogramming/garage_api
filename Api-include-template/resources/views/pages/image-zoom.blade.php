@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Image Zoom - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Image Zoom</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Image Zoom -->
            <x-base.box class="p-0">
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box>
                                <div class="prose">
                                    <p>
                                        Trust fund seitan chia, wolf lomo letterpress Bushwick
                                        before they sold out. Carles kogi fixie, squid twee Tonx
                                        readymade cred typewriter scenester locavore kale chips
                                        vegan organic. Meggings pug wolf Shoreditch typewriter
                                        skateboard. McSweeney's iPhone chillwave, food truck
                                        direct trade disrupt flannel irony tousled Cosby sweater
                                        single-origin coffee. Organic disrupt bicycle rights,
                                        tattooed messenger bag flannel craft beer fashion axe
                                        bitters. Readymade sartorial craft beer, quinoa
                                        sustainable butcher Marfa Echo Park Terry Richardson
                                        gluten-free flannel retro cred mlkshk banjo. Salvia 90's
                                        art party Blue Bottle, PBR&B cardigan 8-bit.
                                    </p>
                                    <div class="image-fit my-5 h-64 w-full">
                                        <x-base.image-zoom
                                            class="!m-0 w-full rounded-xl"
                                            src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                    <p>
                                        Thundercats freegan Truffaut, four loko twee Austin
                                        scenester lo-fi seitan High Life paleo quinoa cray.
                                        Schlitz butcher ethical Tumblr, pop-up DIY keytar ethnic
                                        iPhone PBR sriracha. Tonx direct trade bicycle rights
                                        gluten-free flexitarian asymmetrical. Whatever drinking
                                        vinegar PBR XOXO Bushwick gentrify. Cliche semiotics
                                        banjo retro squid Wes Anderson. Fashion axe dreamcatcher
                                        you probably haven't heard of them bicycle rights. Tote
                                        bag organic four loko ethical selfies gastropub, PBR
                                        fingerstache tattooed bicycle rights.
                                    </p>
                                    <div class="image-fit float-left mr-6 h-64 w-3/5">
                                        <x-base.image-zoom
                                            class="!m-0 w-full rounded-xl"
                                            src="{{ Vite::asset($fakers[0]['images'][1]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                    <p>
                                        Scenester chambray slow-carb, trust fund biodiesel ugh
                                        bicycle rights cornhole. Gentrify messenger bag Truffaut
                                        tousled roof party pork belly leggings, photo booth jean
                                        shorts. Austin readymade PBR plaid chambray. Squid Echo
                                        Park pour-over, wayfarers forage whatever locavore
                                        typewriter artisan deep v four loko. Locavore occupy
                                        Neutra Pitchfork McSweeney's, wayfarers fingerstache.
                                        Actually asymmetrical drinking vinegar yr brunch
                                        biodiesel. Before they sold out sustainable readymade
                                        craft beer Portland gastropub squid Austin, roof party
                                        Thundercats chambray narwhal Bushwick pug.
                                    </p>
                                    <p>
                                        Literally typewriter chillwave, bicycle rights Carles
                                        flannel wayfarers. Biodiesel farm-to-table actually,
                                        locavore keffiyeh hella shabby chic pour-over try-hard
                                        Bushwick. Sriracha American Apparel Brooklyn, synth cray
                                        stumptown blog Bushwick +1 VHS hashtag. Wolf umami
                                        Carles Marfa, 90's food truck Cosby sweater. Fanny pack
                                        try-hard keytar pop-up readymade, master cleanse four
                                        loko trust fund polaroid salvia. Photo booth kitsch
                                        forage chambray, Carles scenester slow-carb lomo
                                        cardigan dreamcatcher. Swag asymmetrical leggings,
                                        biodiesel Tonx shabby chic ethnic master cleanse
                                        freegan.
                                    </p>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <div class="prose">
                                        <p>
                                            Trust fund seitan chia, wolf lomo letterpress Bushwick
                                            before they sold out. Carles kogi fixie, squid twee Tonx
                                            readymade cred typewriter scenester locavore kale chips
                                            vegan organic. Meggings pug wolf Shoreditch typewriter
                                            skateboard. McSweeney's iPhone chillwave, food truck
                                            direct trade disrupt flannel irony tousled Cosby sweater
                                            single-origin coffee. Organic disrupt bicycle rights,
                                            tattooed messenger bag flannel craft beer fashion axe
                                            bitters. Readymade sartorial craft beer, quinoa
                                            sustainable butcher Marfa Echo Park Terry Richardson
                                            gluten-free flannel retro cred mlkshk banjo. Salvia 90's
                                            art party Blue Bottle, PBR&B cardigan 8-bit.
                                        </p>
                                        <div class="image-fit my-5 h-64 w-full">
                                            <x-base.image-zoom
                                                class="!m-0 w-full rounded-xl"
                                                src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                            />
                                        </div>
                                        <p>
                                            Thundercats freegan Truffaut, four loko twee Austin
                                            scenester lo-fi seitan High Life paleo quinoa cray.
                                            Schlitz butcher ethical Tumblr, pop-up DIY keytar ethnic
                                            iPhone PBR sriracha. Tonx direct trade bicycle rights
                                            gluten-free flexitarian asymmetrical. Whatever drinking
                                            vinegar PBR XOXO Bushwick gentrify. Cliche semiotics
                                            banjo retro squid Wes Anderson. Fashion axe dreamcatcher
                                            you probably haven't heard of them bicycle rights. Tote
                                            bag organic four loko ethical selfies gastropub, PBR
                                            fingerstache tattooed bicycle rights.
                                        </p>
                                        <div class="image-fit float-left mr-6 h-64 w-3/5">
                                            <x-base.image-zoom
                                                class="!m-0 w-full rounded-xl"
                                                src="{{ Vite::asset($fakers[0]['images'][1]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                            />
                                        </div>
                                        <p>
                                            Scenester chambray slow-carb, trust fund biodiesel ugh
                                            bicycle rights cornhole. Gentrify messenger bag Truffaut
                                            tousled roof party pork belly leggings, photo booth jean
                                            shorts. Austin readymade PBR plaid chambray. Squid Echo
                                            Park pour-over, wayfarers forage whatever locavore
                                            typewriter artisan deep v four loko. Locavore occupy
                                            Neutra Pitchfork McSweeney's, wayfarers fingerstache.
                                            Actually asymmetrical drinking vinegar yr brunch
                                            biodiesel. Before they sold out sustainable readymade
                                            craft beer Portland gastropub squid Austin, roof party
                                            Thundercats chambray narwhal Bushwick pug.
                                        </p>
                                        <p>
                                            Literally typewriter chillwave, bicycle rights Carles
                                            flannel wayfarers. Biodiesel farm-to-table actually,
                                            locavore keffiyeh hella shabby chic pour-over try-hard
                                            Bushwick. Sriracha American Apparel Brooklyn, synth cray
                                            stumptown blog Bushwick +1 VHS hashtag. Wolf umami
                                            Carles Marfa, 90's food truck Cosby sweater. Fanny pack
                                            try-hard keytar pop-up readymade, master cleanse four
                                            loko trust fund polaroid salvia. Photo booth kitsch
                                            forage chambray, Carles scenester slow-carb lomo
                                            cardigan dreamcatcher. Swag asymmetrical leggings,
                                            biodiesel Tonx shabby chic ethnic master cleanse
                                            freegan.
                                        </p>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Image Zoom -->
        </div>
    </div>
@endsection
