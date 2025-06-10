@extends('layout/frontend')

@section('konten')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('asset/img/carousel-bg-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Menyediakan Sewa Alat Camping //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Selamat Datang di EcoCamp Rentals</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('asset/img/carousel-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('asset/img/carousel-bg-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Menyediakan Sewa Alat Camping //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Penawaran terbaik di Bulan Juni, booking sekarang juga !! </h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('asset/img/carousel-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">TERPERCAYA</h5>
                            <p>Selalu menjadi andalan keluarga saat bepergian baik di dalam kota maupun luar kota.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">TERMURAH</h5>
                            <p>Harga dijamin terjangkau dan sebanding dengan fasilitas yang kami berikan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">TERBAIK</h5>
                            <p>Selalu memberikan pelayanan terbaik kepada seluruh pelanggan, karena kepuasan anda adalah kebahagiaan kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('asset/img/about.jpg') }}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">9 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">EcoCamp</span>  is the best place to rent camping equipment.</h1>
                    <p class="mb-4">Toko EcoCamp menyediakan peralatan berkemah berkualitas tinggi dengan layanan yang fleksibel dan harga kompetitif, memastikan kenyamanan dan efisiensi bagi para pelanggan. Dengan pemeriksaan dan perawatan rutin, semua peralatan selalu dalam kondisi prima. 
                        EcoCamp juga berkomitmen terhadap keberlanjutan lingkungan, mengurangi limbah dan jejak karbon melalui penggunaan peralatan sewa.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Layanan Konsultasi dan Rekomendasi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Pemeriksaan dan Perawatan Peralatan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/about" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   <!-- Fact Start -->
   <div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">9</h2>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">7</h2>
                <p class="text-white mb-0">Expert Employee</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">2619</h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">2593</h2>
                <p class="text-white mb-0">Compleate Projects</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Best Employee //</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{  asset('asset/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Andika</h5>
                            <small>Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{  asset('asset/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Rendra</h5>
                            <small>Sales Executive</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{  asset('asset/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Aaron</h5>
                            <small>Supervisor</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{  asset('asset/img/team-4.jp') }}g" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Alex</h5>
                            <small>Cashier</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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