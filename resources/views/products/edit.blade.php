@extends('layout.app')

@section('title', 'Edit Product')

@section('contents')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Produk</h1>

    <div class="bg-white shadow-md rounded-xl p-6">
        <form action="{{ route('admin/products/update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Nama Barang --}}
            <div>
                <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" value="{{ $product->nama_barang }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            {{-- Harga Sewa --}}
            <div>
                <label for="harga_sewa" class="block text-sm font-medium text-gray-700">Harga Sewa</label>
                <input type="number" name="harga_sewa" id="harga_sewa" value="{{ $product->harga_sewa }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            {{-- Gambar --}}
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" 
                    class="mt-1 block w-full text-sm text-gray-900 file:mr-4 file:py-2 file:px-4
                           file:rounded-md file:border-0 file:text-sm file:font-semibold
                           file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                @if ($product->gambar)
                    <img src="{{ asset('asset/img/' . $product->gambar) }}" alt="{{ $product->gambar }}" class="mt-4 h-24 rounded shadow">
                @endif
            </div>

            {{-- Kapasitas --}}
            <div>
                <label for="kapasitas" class="block text-sm font-medium text-gray-700">Kapasitas</label>
                <input type="text" name="kapasitas" id="kapasitas" value="{{ $product->kapasitas }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            {{-- Bahan --}}
            <div>
                <label for="bahan" class="block text-sm font-medium text-gray-700">Bahan</label>
                <input type="text" name="bahan" id="bahan" value="{{ $product->bahan }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            {{-- Status --}}
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="available" {{ $product->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="unavailable" {{ $product->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                </select>
            </div>

            {{-- Deskripsi --}}
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >{{ $product->deskripsi }}</textarea>
            </div>

            {{-- Tombol Submit --}}
            <div>
                <button type="submit" 
                    class="w-full inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Update Produk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
