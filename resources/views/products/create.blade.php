@extends('layout.app')

@section('title', 'Create Product')

@section('contents')
<h1 class="font-bold text-2xl text-center mb-8">Add Product</h1>
<hr class="mb-8" />

<div class="flex justify-center">
    <div class="w-full max-w-xl border-b border-gray-900/10 pb-12 px-4">
        <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nama Barang -->
            <div class="mb-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <!-- Harga Sewa -->
            <div class="mb-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Harga Sewa</label>
                <input id="harga_sewa" name="harga_sewa" type="number" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Gambar</label>
                <input id="gambar" name="gambar" type="file" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <!-- Kapasitas -->
            <div class="mb-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Kapasitas</label>
                <input id="kapasitas" name="kapasitas" type="text" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <!-- Bahan -->
            <div class="mb-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Bahan</label>
                <input id="bahan" name="bahan" type="text" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <!-- Deskripsi -->
            <div class="mb-6">
                <label class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi" rows="3" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button type="submit" class="w-full sm:w-auto px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 font-semibold">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
