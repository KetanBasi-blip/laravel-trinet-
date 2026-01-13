<aside class="w-64 bg-gray-900 text-white min-h-screen">
    <div class="p-6 text-center border-b border-gray-700">
        <img src="{{ asset('images/cover-trinet.jpeg') }}"
             class="h-12 mx-auto mb-2 bg-white p-1 rounded">
        <h2 class="text-lg font-bold">
            Trinet Prima Solusi
        </h2>
    </div>

    <nav class="mt-6">
        <a href="{{ route('dashboard') }}"
           class="flex items-center px-6 py-3 hover:bg-white-800
           {{ request()->routeIs('dashboard') ? 'bg-gray-800' : '' }}">
            📊 <span class="ml-3">Dashboard</span>
        </a>


<style>
/* Sidebar */
.sidebar {
    width: 240px;
    height: 100vh;
    background-color: #212529;
    position: fixed;
}

/* Menu item */
.sidebar a {
    color: #fff;
    text-decoration: none;
    padding: 12px 16px;
    display: block;
}

/* Hover main menu */
.sidebar .menu-item:hover {
    background-color: #343a40;
}

/* Submenu (ke samping) */
.submenu {
    display: none;
    position: absolute;
    left: 240px;
    top: 0;
    width: 220px;
    background-color: #343a40;
    height: 100vh;
}

/* Show submenu on hover */
.menu-wrapper:hover .submenu {
    display: block;
}

.submenu a:hover {
    background-color: #495057;
}
</style>

<div class="sidebar">
    <div class="menu-wrapper position-relative">

        <!-- MENU UTAMA -->
        <a href="#" class="menu-item">
            📦 ID Barang ▶
        </a>

        <!-- SUB MENU KE SAMPING BARANG-->
        <div class="submenu">
            <a href="{{ route('barang.kode') }}">Kode Inventaris</a>
            <a href="{{ route('barang.nama') }}">Nama Barang</a>
            <a href="{{ route('barang.kategori') }}">Kategori Barang</a>
            <a href="{{ route('barang.merek') }}">Merek / Tipe</a>
            <a href="{{ route('barang.serial') }}">Nomor Seri</a>
        </div>
        </div>



           <!-- MENU UTAMA INFORMASI PEROLEHAN  -->
        <a href="#" class="menu-item">
            📦 Informasi Perolehan ▶
        </a>



           <!-- MENU UTAMA Lokasi & Penanggung Jawab-->
        <a href="#" class="menu-item">
            📦 Lokasi  ▶
        </a>


          <!-- MENU UTAMA  Kondisi & Status  Kondisi-->
        <a href="#" class="menu-item">
            📦  Kondisi & Status ▶
        </a>



          <!-- MENU UTAMA  Kondisi & Status  Nilai -->
        <a href="#" class="menu-item">
            📦  Nilai Aset ▶
        </a>











        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full text-left flex items-center px-6 py-3 hover:bg-red-600">
                🚪 <span class="ml-3">Logout</span>
            </button>
        </form>
    </nav>
</aside>
