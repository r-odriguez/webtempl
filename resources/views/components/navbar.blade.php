<nav class="sticky top-0 flex items-center justify-between py-3 px-4 border-b border-zinc-100 bg-white text-sm sm:px-6 lg:px-8">
    <a href="/" class="text-xl font-bold">Website Templates</a>

    <div class="flex items-center gap-6 text-zinc-900">
        <a href="/shop" class="flex items-center gap-2 hover:text-zinc-700">
            <x-icons.store-outline />
            Shop
        </a>
        <a href="/cart" id="cart" class="flex items-center gap-2 hover:text-zinc-700">
            <x-icons.cart-outline />
            Cart {{ $cart == 0 ? "" : $cart }}
            <span id="cart-count"></span>
        </a>

        <button
            id="account-btn"
            class="flex items-center gap-1"
            onclick="document.querySelector('#account-submenu').showModal()"
        >
            <x-icons.face-outline />
            Account
        </button>
        <dialog
            id="account-submenu"
            class="open:flex open:flex-col h-fit m-0 border rounded bg-white shadow-lg backdrop:opacity-0"
        >
            <a href="/user/templates" class="flex px-4 py-2 gap-2 rounded-md">
                <x-icons.layout-outline />
                My Templates
            </a>
            <a href="/user/bookmarks" class="flex px-4 py-2 gap-2 rounded-md">
                <x-icons.bookmark-outline />
                Saved
            </a>
            <a href="/settings" class="flex px-4 py-2 gap-2 rounded-md">
                <x-icons.settings-outline />
                Settings
            </a>

            <hr />

            <a id="logout" href="/api/signout" class="flex px-4 py-2 gap-2 rounded-md">
                <x-icons.logout />
                Exit
            </a>
        </dialog>
        <a class="text-sky-500" href="/signin" class="row">Sign in</a>
    </div>
</nav>
