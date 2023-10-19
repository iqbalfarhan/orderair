<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content space-y-4">
    <li>
        <h2 class="menu-title">Halaman utama</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}" wire:navigate>
                    <x-icon name="dashboard" />
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <h2 class="menu-title">Pemesanan</h2>
        <ul>
            <li>
                <a href="{{ route('order.create') }}" class="{{ Route::is('order.create') ? 'active' : '' }}" wire:navigate>
                    <x-icon name="circle-plus" />
                    <span>Tambah antrian</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order.queue') }}" class="{{ Route::is('order.queue') ? 'active' : '' }}" wire:navigate>
                    <x-icon name="hourglass" />
                    <span>Masih mengantri</span>
                    <span class="badge badge-sm" wire:poll>{{ $datas->where('status', 'queue')->count() }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order.progress') }}" class="{{ Route::is('order.progress') ? 'active' : '' }}" wire:navigate>
                    <x-icon name="garden-cart" />
                    <span>Dalam pengiriman</span>
                    <span class="badge badge-sm" wire:poll>{{ $datas->where('status', 'progress')->count() }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order.done') }}" class="{{ Route::is('order.done') ? 'active' : '' }}" wire:navigate>
                    <x-icon name="checkbox" />
                    <span>Selesai diantar</span>
                    <span class="badge badge-sm" wire:poll>{{ $datas->where('status', 'done')->count() }}</span>
                </a>
            </li>
        </ul>
    </li>
    
   <li>
        <h2 class="menu-title">Lainnyat</h2>
        <ul>
             <li>
                <button wire:click="logout">
                    <x-icon name="logout" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
   </li>
</ul>