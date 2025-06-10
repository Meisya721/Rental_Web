@extends('layout.app')

@section('title', 'Data Penyewaan')

@section('contents')
    <div class="container-fluid my-5">
        <h1 class="font-bold text-2xl mb-4">List Penyewaan</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 border-b">#</th>
                        <th class="py-3 px-4 border-b">Nama Barang</th>
                        <th class="py-3 px-4 border-b">Gambar</th>
                        <th class="py-3 px-4 border-b">Nama Penyewa</th>
                        <th class="py-3 px-4 border-b">Tanggal Sewa</th>
                        <th class="py-3 px-4 border-b">Tanggal Kembali</th>
                        <th class="py-3 px-4 border-b">Total Harga</th>
                        <th class="py-3 px-4 border-b">Jumlah Bayar</th>
                        <th class="py-3 px-4 border-b">Status</th>
                        <th class="py-3 px-4 border-b">Metode</th>
                        <th class="py-3 px-4 border-b">Status Barang</th>
                        <th class="py-3 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataSewa as $index => $sewa)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $sewa->product->nama_barang }}</td>
                        <td class="py-2 px-4 border-b">
                            <img src="{{ asset('asset/img/' . $sewa->product->gambar) }}"
                                 alt="{{ $sewa->product->nama_barang }}"
                                 class="w-16 h-16 object-cover rounded-lg">
                        </td>
                        <td class="py-2 px-4 border-b">{{ $sewa->nama_penyewa }}</td>
                        <td class="py-2 px-4 border-b">{{ \Carbon\Carbon::parse($sewa->tanggal_sewa)->format('d-m-Y') }}</td>
                        <td class="py-2 px-4 border-b">{{ \Carbon\Carbon::parse($sewa->tanggal_kembali)->format('d-m-Y') }}</td>
                        <td class="py-2 px-4 border-b">Rp{{ number_format($sewa->total_price, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">Rp{{ number_format($sewa->jumlah_bayar, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">
                            <span class="badge bg-{{ $sewa->status === 'selesai' ? 'success' : ($sewa->status === 'diproses' ? 'warning text-dark' : 'secondary') }}">
                                {{ ucfirst($sewa->status) }}
                            </span>
                        </td>
                        <td class="py-2 px-4 border-b">{{ ucfirst($sewa->payment_method) }}</td>
                        <td class="py-2 px-4 border-b">
                            @if($sewa->status_barang == 'dipinjam')
                                <span class="badge bg-info">Dipinjam</span>
                            @else
                                <span class="badge bg-success">Dikembalikan</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">
                            <div class="p-2 border rounded bg-light d-inline-block">
                                @if($sewa->status_barang == 'dipinjam')
                                    <form action="{{ route('sewa.updateStatusBarang', $sewa->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status_barang" value="dikembalikan">
                                        <button type="submit" class="btn btn-success btn-sm" 
                                                onclick="return confirm('Apakah Anda yakin barang sudah dikembalikan?')">
                                            <i class="bi bi-check-circle"></i> Dikembalikan
                                        </button>
                                    </form>
                                @else
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle-fill"></i> Selesai
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection