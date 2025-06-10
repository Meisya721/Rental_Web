@extends('layout.app')

@section('title', 'Show Product')

@section('contents')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Detail Produk</h1>
    <div class="bg-white shadow-md rounded-xl p-6 space-y-6">
        
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <p class="mt-1 text-base text-gray-900">{{ $product->nama_barang }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Harga Sewa</label>
            <p class="mt-1 text-base text-gray-900">Rp {{ number_format($product->harga_sewa, 0, ',', '.') }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Gambar</label>
            <div class="mt-2">
                <img src="{{ asset('asset/img/' . $product->gambar) }}" alt="{{ $product->nama_barang }}" class="w-full max-w-md rounded-lg shadow-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Kapasitas</label>
            <p class="mt-1 text-base text-gray-900">{{ $product->kapasitas }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Bahan</label>
            <p class="mt-1 text-base text-gray-900">{{ $product->bahan }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <p class="mt-1 text-base text-gray-900 whitespace-pre-line">{{ $product->deskripsi }}</p>
        </div>

    </div>
</div>
@endsection
