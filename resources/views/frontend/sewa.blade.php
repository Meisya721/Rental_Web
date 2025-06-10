@extends('layout/frontend')

@section('konten')
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Sewa</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/booking">Booking</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Sewa</li>
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
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-white">Form Sewa: {{ $product->nama_barang }}</h4>
                </div>

                <div class="card-body text-center">
                    <div class="mb-4">
                        <img src="{{ asset('asset/img/' . $product->gambar) }}" 
                            alt="{{ $product->nama }}" 
                            class="img-fluid rounded shadow-sm" 
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <form action="{{ route('pembayaran') }}" method="POST" id="sewaForm">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" id="harga_per_hari" value="{{ $product->harga }}"> {{-- harga per hari --}}

                        <div class="mb-3">
                            <label class="form-label">Nama Penyewa</label>
                            <input type="text" name="nama_penyewa" class="form-control" value="{{ Auth::user()->name }}" readonly>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tanggal Sewa</label>
                                <input type="date" name="tanggal_sewa" id="tanggal_sewa" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <select name="payment_method" class="form-select" required>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="hidden" id="harga_sewa" value="{{ $product->harga_sewa }}">
                            <input type="text" name="total_price" id="total_price" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Bayar</label>
                            <input type="number" name="jumlah_bayar" class="form-control" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-cash"></i> Bayar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Script untuk menghitung total_price --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const tanggalSewaInput = document.querySelector('input[name="tanggal_sewa"]');
    const tanggalKembaliInput = document.querySelector('input[name="tanggal_kembali"]');
    const totalPriceInput = document.getElementById('total_price');
    const hargaPerHari = parseInt(document.getElementById('harga_sewa').value);

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    tanggalSewaInput.min = today;
    
    function hitungTotalHarga() {
        if (tanggalSewaInput.value && tanggalKembaliInput.value) {
            const sewa = new Date(tanggalSewaInput.value);
            const kembali = new Date(tanggalKembaliInput.value);

            if (!isNaN(sewa) && !isNaN(kembali) && kembali >= sewa) {
                const diffTime = kembali - sewa;
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) || 1;
                const totalHarga = diffDays * hargaPerHari;
                totalPriceInput.value = totalHarga;
            } else {
                totalPriceInput.value = '';
            }
        }
    }

    // Update the minimum return date when rental date changes
    tanggalSewaInput.addEventListener('change', function() {
        tanggalKembaliInput.min = tanggalSewaInput.value;
        hitungTotalHarga();
    });
    
    tanggalKembaliInput.addEventListener('change', hitungTotalHarga);
});
</script>


@endsection