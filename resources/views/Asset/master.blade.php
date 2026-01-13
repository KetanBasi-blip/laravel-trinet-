@extends('layouts.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-6">Master Asset</h1>

@if (session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white p-6 rounded-lg shadow max-w-3xl">

    <h2 class="text-lg font-semibold mb-4">
        Identitas Barang <span class="text-red-600">*</span>
    </h2>

    <form method="POST" action="{{ route('asset.master.store') }}">
        @csrf

        <!-- KODE INVENTARIS -->
        <div class="mb-4">
            <label class="block font-medium mb-1">
                Kode Inventaris <span class="text-red-600">*</span>
            </label>
            <input type="text"
                   name="kode_inventaris"
                   placeholder="INV-001"
                   value="{{ old('kode_inventaris') }}"
                   class="w-full border rounded px-4 py-2">

            @error('kode_inventaris')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- NAMA BARANG -->
        <div class="mb-4">
            <label class="block font-medium mb-1">
                Nama Barang <span class="text-red-600">*</span>
            </label>
            <input type="text"
                   name="nama_barang"
                   value="{{ old('nama_barang') }}"
                   class="w-full border rounded px-4 py-2">
        </div>

        <!-- KATEGORI -->
        <div class="mb-4">
            <label class="block font-medium mb-1">
                Kategori Barang <span class="text-red-600">*</span>
            </label>
            <select name="kategori_barang"
                    class="w-full border rounded px-4 py-2">
                <option value="">-- Pilih Kategori --</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Furnitur">Furnitur</option>
                <option value="ATK">ATK</option>
                <option value="Kendaraan">Kendaraan</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>

        <!-- MEREK / TIPE -->
        <div class="mb-4">
            <label class="block font-medium mb-1">
                Merek / Tipe / Spesifikasi
            </label>
            <textarea name="spesifikasi"
                      rows="3"
                      class="w-full border rounded px-4 py-2"
                      placeholder="Contoh: Lenovo ThinkPad i5, RAM 16GB">
                {{ old('spesifikasi') }}
            </textarea>
        </div>

        <!-- NOMOR SERI -->
        <div class="mb-6">
            <label class="block font-medium mb-1">
                Nomor Seri
            </label>
            <input type="text"
                   name="nomor_seri"
                   value="{{ old('nomor_seri') }}"
                   class="w-full border rounded px-4 py-2">
        </div>

        <!-- BUTTON -->
        <div class="flex justify-end space-x-3">
            <button type="reset"
                    class="px-6 py-2 border rounded hover:bg-gray-100">
                Reset
            </button>

            <button type="submit"
                    class="px-6 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                Simpan Asset
            </button>
        </div>

    </form>
</div>
@endsection
