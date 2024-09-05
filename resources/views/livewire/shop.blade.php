<div>
    @section("vite")
        @vite("resources/js/shop.js")
    @endsection

    <x-navbar cart="{{ $count }}"></x-navbar>

    <main class="px-4 py-10 sm:px-6 lg:px-8">
        <div class="good-grid place-items-center w-full">
            @foreach ($templates as $t)
                <div class="flex flex-col place-items-start gap-1">
                    <img class="w-60 template-img"
                         alt="product image"
                         src="{{ Vite::asset("resources/images/fruit.png") }}"
                         wire:click="set_dialog_data({{ $t["id"] }})"
                    />

                    <div class="w-full px-1">
                        <div class="flex place-items-center place-content-between w-full">
                            <h4>{{ $t["title"] }}</h4>
                            <button class="add-to-cart w-6" wire:click="add_to_cart({{ $t['id'] }})">
                                <x-icons.store-bag-outline />
                            </button>
                        </div>

                        <p class="text-sm text-slate-500">{{ $t["description"] }}</p>

                        <div class="flex place-items-center place-c">
                            <span class="text-xs">By {{ $t["author"] }}</span>

                            <span class="text-sm font-semibold">
                                {{ "$ " . $t["price"] }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <dialog
            id="selected-template"
            class="open:flex gap-28 bg-transparent backdrop:bg-gray-50/50 backdrop:backdrop-blur"
        >
            <img class="w-full h-4/5 object-cover"
                 alt="product image"
                 src="{{ Vite::asset("resources/images/fruit.png") }}"
            />

            <div class="flex flex-col gap-6 w-full">
                <div class="flex flex-col">
                    <div class="flex place-items-center gap-4">
                        <h1 class="text-3xl font-semibold">
                            {{ $template["title"] }}
                        </h1>
                        <a href="#" class="text-xs text-blue-500">live preview</a>
                    </div>

                    <small class="text-sm">Made by Me</small>
                </div>

                <p class="text-xl">
                    {{ $template["pricingModel"] == "PAID"
                       ? '$' . $template["price"]
                       : $template["pricingModel"] }}
                </p>

                <p class="text-lg font-medium text-gray-400">
                    {{ $template["description"] }}
                </p>

                <button class="p-4 w-fit rounded-lg text-white bg-black">
                    Add to Cart
                </button>
            </div>
        </dialog>
    </main>

    <div id="notification"></div>
</div>
