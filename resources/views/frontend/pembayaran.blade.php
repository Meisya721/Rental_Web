@extends('layout/frontend')

@section('konten')

<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Pembayaran</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/booking">Booking</a></li>
                         <li class="breadcrumb-item"><a href="/sewa">Sewa</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Pembayaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Konfirmasi Pembayaran</h4>
                </div>

                <div class="card-body">
                    <h5 class="text-center mb-4">Apakah Anda yakin ingin menyelesaikan pembayaran untuk:</h5>

                    <div class="mb-3 text-center">
                        <img src="{{ asset('asset/img/' . $product->gambar) }}" 
                             alt="{{ $product->nama_barang }}" 
                             class="img-fluid rounded" 
                             style="max-height: 150px;">
                    </div>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Nama Barang:</strong> {{ $product->nama_barang }}</li>
                        <li class="list-group-item"><strong>Nama Penyewa:</strong> {{ $nama_penyewa }}</li>
                        <li class="list-group-item"><strong>Tanggal Sewa:</strong> {{ $tanggal_sewa }}</li>
                        <li class="list-group-item"><strong>Tanggal Kembali:</strong> {{ $tanggal_kembali }}</li>
                        <li class="list-group-item"><strong>Total Harga:</strong> Rp{{ number_format($total_price, 0, ',', '.') }}</li>
                        <li class="list-group-item"><strong>Jumlah Bayar:</strong> Rp{{ number_format($jumlah_bayar, 0, ',', '.') }}</li>
                        <li class="list-group-item"><strong>Metode Pembayaran:</strong> {{ ucfirst($payment_method) }}</li>
                    </ul>

                    <form action="{{ route('sewa.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="nama_penyewa" value="{{ $nama_penyewa }}">
                        <input type="hidden" name="tanggal_sewa" value="{{ $tanggal_sewa }}">
                        <input type="hidden" name="tanggal_kembali" value="{{ $tanggal_kembali }}">
                        <input type="hidden" name="payment_method" value="{{ $payment_method }}">
                        <input type="hidden" name="total_price" value="{{ $total_price }}">
                        <input type="hidden" name="jumlah_bayar" value="{{ $jumlah_bayar }}">

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-cash"></i> Done
                        </button>
                        <a href="{{ route('booking') }}" class="btn btn-danger">Cancel</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
