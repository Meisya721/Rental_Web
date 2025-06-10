@extends('layout/frontend')

@section('konten')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('asset/img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Anya</h5>
                    <p>Karyawan Kantoran</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">EcoCamp benar-benar memudahkan perjalanan kemah saya! Peralatan mereka sangat lengkap dan dalam kondisi prima, membuat pengalaman berkemah kami menjadi sangat nyaman. Plus, saya merasa lebih baik mengetahui bahwa saya turut berkontribusi dalam mengurangi limbah dan jejak karbon.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('asset/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Reza</h5>
                    <p>PNS</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Layanan antar-jemput peralatan dari EcoCamp sangat membantu, terutama saat kami harus berangkat cepat ke lokasi kemah. Harganya juga sangat kompetitif dan jauh lebih hemat dibandingkan harus membeli peralatan baru.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('asset/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Gilang</h5>
                    <p>Pengusaha</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Saya sangat puas dengan EcoCamp! Proses pemesanan mudah dan cepat, serta peralatannya berkualitas tinggi. Sangat menyenangkan bisa menyewa daripada membeli, terutama dengan perhatian mereka terhadap keberlanjutan lingkungan.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('asset/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Chika</h5>
                    <p>Owner Skincare</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">EcoCamp menawarkan fleksibilitas waktu sewa yang luar biasa, memungkinkan saya merencanakan perjalanan tanpa khawatir soal pengembalian peralatan. Pelayanan pelanggan mereka juga sangat responsif dan ramah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
@endsection