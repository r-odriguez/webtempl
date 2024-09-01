<div>
    <x-navbar cart="{{ $count }}"></x-navbar>

    <main class="px-4 py-10 sm:px-6 lg:px-8">
        <div class="good-grid place-items-center w-full">
            @foreach ($templates as $t)
                <div class="flex flex-col place-items-start gap-1">
                    <img class="w-60"
                         alt="product image"
                         src="{{ Vite::asset("resources/images/fruit.png") }}"
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
    </main>

    <div id="notification"></div>
</div>
