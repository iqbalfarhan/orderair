<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content space-y-4">
    <li>
        <h2 class="menu-title">Halaman utama</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ $this->isActive('home') }}" wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            @can('jadwal.index')
                <li>
                    <a href="{{ route('jadwal.index') }}" class="{{ $this->isActive('jadwal.index') }}" wire:navigate>
                        <x-tabler-calendar class="size-5" />
                        <span>Jadwal pengiriman</span>
                    </a>
                </li>
            @endcan
        </ul>
    </li>

    <li>
        <h2 class="menu-title">Pemesanan</h2>
        <ul>
            @can('order.create')
                <li>
                    <a href="{{ route('order.create') }}" class="{{ $this->isActive('order.create') }}" wire:navigate>
                        <x-tabler-circle-plus class="size-5" />
                        <span>Tambah antrian</span>
                    </a>
                </li>
            @endcan
            @can('order.queue')
                <li>
                    <a href="{{ route('order.queue') }}" class="{{ $this->isActive('order.queue') }}" wire:navigate>
                        <x-tabler-hourglass class="size-5" />
                        <span>Masih mengantri</span>
                        @livewire('partial.getcount', ['status' => 'queue'], key(1))
                    </a>
                </li>
            @endcan
            @can('order.progress')
                <li>
                    <a href="{{ route('order.progress') }}" class="{{ $this->isActive('order.progress') }}" wire:navigate>
                        <x-tabler-garden-cart class="size-5" />
                        <span>Dalam pengiriman</span>
                        @livewire('partial.getcount', ['status' => 'progress'], key(2))
                    </a>
                </li>
            @endcan
            @can('order.done')
                <li>
                    <a href="{{ route('order.done') }}" class="{{ $this->isActive('order.done') }}" wire:navigate>
                        <x-tabler-checkbox class="size-5" />
                        <span>Selesai diantar</span>
                        @livewire('partial.getcount', ['status' => 'done'], key(3))
                    </a>
                </li>
            @endcan
        </ul>
    </li>

    <li>
        <h2 class="menu-title">Lainnya</h2>
        <ul>
            @can('setting.index')
                <li>
                    <a href="{{ route('setting.index') }}" class="{{ $this->isActive('setting.index') }}" wire:navigate>
                        <x-tabler-settings class="size-5" />
                        <span>Pengaturan App</span>
                    </a>
                </li>
            @endcan

            @can('permission.index')
                <li>
                    <a href="{{ route('permission.index') }}" class="{{ $this->isActive('permission.index') }}"
                        wire:navigate>
                        <x-tabler-key class="size-5" />
                        <span>App Permission</span>
                    </a>
                </li>
            @endcan

            @can('user.index')
                <li>
                    <a href="{{ route('user.index') }}" class="{{ $this->isActive('user.index') }}" wire:navigate>
                        <x-tabler-users class="size-5" />
                        <span>User mangement</span>
                    </a>
                </li>
            @endcan

            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="size-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
