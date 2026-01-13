<aside class="w-64 bg-gray-900 text-white min-h-screen">
    <div class="p-6 text-center border-b border-gray-700">
        <img src="{{ asset('images/logo-trinet.jpeg') }}"
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

        <a href="#"
           class="flex items-center px-6 py-3 hover:bg-white-800">
            📦 <span class="ml-3">Master</span>
        </a>





        <a href="#"
           class="flex items-center px-6 py-3 hover:bg-white-800">
            👥 <span class="ml-3">User Management</span>
        </a>

        <a href="#"
           class="flex items-center px-6 py-3 hover:bg-white-800">
            📑 <span class="ml-3">Reports</span>
        </a>

        <a href="#"
           class="flex items-center px-6 py-3 hover:bg-white-800">
            ⚙️ <span class="ml-3">Settings</span>
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
