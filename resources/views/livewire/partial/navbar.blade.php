<div class="navbar bg-base-100">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu class="size-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <button class="btn btn-circle">
            <x-tabler-user class="size-5" />
        </button>
    </div>
</div>
