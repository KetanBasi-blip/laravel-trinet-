@extends('layouts.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-6">
    Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500">Total Asset</h3>
        <p class="text-3xl font-bold"></p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500">User Aktif</h3>
        <p class="text-3xl font-bold"></p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500">Laporan Bulan Ini</h3>
        <p class="text-3xl font-bold"></p>
    </div>

</div>
@endsection
