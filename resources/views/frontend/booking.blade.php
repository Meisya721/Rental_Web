@extends('layout/frontend')

@section('konten')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Tenda Kemah-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
          <h3 class="text-center mb-5">Daftar Sewa Alat Kemah</h3>
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          @foreach ($products as $product)
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img src="{{ asset('asset/img/' . $product->gambar) }}" alt="{{ $product->nama_barang }}" />
                <!-- Product details-->
                <div class="card-body card-body-custom pt-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">{{ $product->nama_barang }}</h5>
                    <!-- Product price-->
                    <div class="rent-price mb-3">
                      <span class="text-primary">Rp.{{ number_format($product->harga_sewa) }}/</span>day
                    </div>
                    <ul class="list-unstyled list-style-group">
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Kapasitas</span>
                        <span style="font-weight: 600">{{ $product->kapasitas }}</span>
                      </li>
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Bahan</span>
                        <span style="font-weight: 600">{{ $product->bahan }}</span>
                      </li>
                      <li class="border-bottom p-2">
                        <span>Deskripsi:</span>
                        <div><b>{{ $product->deskripsi }}</b></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer border-top-0 bg-transparent">
                  <div class="text-center">
                    <a href="{{ route('sewa.create', $product->id) }}" class="btn btn-danger">Sewa</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </section>

@endsection