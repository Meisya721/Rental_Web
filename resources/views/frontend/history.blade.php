@extends('layout/frontend')

@section('konten')
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">History</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/booking">Booking</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">History</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white py-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-clock-history me-2 fs-5"></i>
                        <h4 class="mb-0 text-white">Riwayat Penyewaan Saya</h4>
                    </div>
                </div>

                <div class="card-body p-0">
                    @if($rentals->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="py-3 px-4 border-0" style="min-width: 50px;">No</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 80px;">Gambar</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 150px;">Nama Barang</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 120px;">Tanggal Sewa</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 130px;">Tanggal Kembali</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 120px;">Total Harga</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 120px;">Jumlah Bayar</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 140px;">Status Pembayaran</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 130px;">Metode Pembayaran</th>
                                        <th class="py-3 px-4 border-0" style="min-width: 120px;">Status Barang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rentals as $index => $rental)
                                        <tr class="border-bottom">
                                            <td class="py-3 px-4 align-middle">
                                                <span class="fw-semibold text-muted">{{ $index + 1 }}</span>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="position-relative">
                                                    <img src="{{ asset('asset/img/' . $rental->product->gambar) }}" 
                                                        alt="{{ $rental->product->nama_barang }}" 
                                                        class="img-fluid rounded-3 shadow-sm" 
                                                        style="width: 70px; height: 70px; object-fit: cover;">
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="fw-semibold text-dark">{{ $rental->product->nama_barang }}</div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-calendar-event text-primary me-2"></i>
                                                    <span>{{ \Carbon\Carbon::parse($rental->tanggal_sewa)->format('d M Y') }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-calendar-check text-success me-2"></i>
                                                    <span>{{ \Carbon\Carbon::parse($rental->tanggal_kembali)->format('d M Y') }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="fw-bold text-primary">Rp{{ number_format($rental->total_price, 0, ',', '.') }}</div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="fw-semibold text-success">Rp{{ number_format($rental->jumlah_bayar, 0, ',', '.') }}</div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                @if($rental->status == 'lunas')
                                                    <span class="badge bg-success px-3 py-2 rounded-pill">
                                                        <i class="bi bi-check-circle me-1"></i>Lunas
                                                    </span>
                                                @elseif($rental->status == 'dp')
                                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                                        <i class="bi bi-hourglass-split me-1"></i>DP
                                                    </span>
                                                @else
                                                    <span class="badge bg-info px-3 py-2 rounded-pill">
                                                        <i class="bi bi-info-circle me-1"></i>{{ ucfirst($rental->status) }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-credit-card text-muted me-2"></i>
                                                    <span class="text-capitalize">{{ $rental->payment_method }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 align-middle">
                                                @if($rental->status_barang == 'dipinjam')
                                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                                        <i class="bi bi-box-arrow-up me-1"></i>Dipinjam
                                                    </span>
                                                @else
                                                    <span class="badge bg-success px-3 py-2 rounded-pill">
                                                        <i class="bi bi-box-arrow-in-down me-1"></i>Dikembalikan
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <div class="mb-4">
                                <i class="bi bi-inbox display-1 text-muted opacity-50"></i>
                            </div>
                            <h5 class="text-muted mb-3">Belum Ada Riwayat Penyewaan</h5>
                            <p class="text-muted mb-4">Anda belum memiliki riwayat penyewaan barang apapun</p>
                            <a href="{{ route('booking') }}" class="btn btn-primary btn-lg rounded-pill px-4">
                                <i class="bi bi-cart-plus me-2"></i>Mulai Sewa Sekarang
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection