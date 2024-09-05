<div>
    <x-auth-navbar />
    <form class="flex flex-col w-fit gap-2 p-4 m-auto h-full">
        <h2>Sign in</h2>
        <input
            class="border rounded p-1"
            wire:model.live="email"
            type="email" name="email"
            placeholder="type your email"
            required
        />
        <input
            class="border rounded p-1"
            wire:model.live="password"
            type="password" name="password"
            placeholder="type your password"
            required
        />
        <button class="p-1 bg-slate-100 rounded mt-2">
            Submit
        </button>
    </form>
</div>
