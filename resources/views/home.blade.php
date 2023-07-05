@extends('layouts.main')

@section('container')
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">IT HELPDESK</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#pengumuman">Panduan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#panduan">Tentang</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="/login">Login</a></li>
                    {{-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registertutor.php">Register Tutor</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-info text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="img-fluid mb-5" src="{{ asset('pp.png') }}" width="45%" alt="" />
            <!-- Masthead Heading-->
            <h3 class="masthead-heading text-uppercase mb-0">IT HELPDESK <br> Diskominfo Malang</h3>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <!--  <p class="masthead-subheading font-weight-light mb-0">SMK Richards Lab Jakarta</p> -->
        </div>
    </header>

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="pengumuman">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <!-- About Section Heading-->
            {{-- <h2 class="page-section-heading text-center text-uppercase text-white">Tentang IT Helpdesk</h2> --}}
            <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Panduan Penggunaan</h3>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Portfolio Grid Items-->
            <div class="row">
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid img-thumbnail rounded-circle" src="{{ asset('loginiconputih.jpg') }}" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid img-thumbnail rounded-circle" src="{{ asset('pilih.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid img-thumbnail rounded-circle" src="{{ asset('isi.jpg') }}" alt="" />
                    </div>
                </div>

    </section>


    <!-- About Section-->
    <section class="page-section bg-info text-white mb-0" id="panduan">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Tentang IT Helpdesk</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead text-white">IT Helpdesk adalah aplikasi yang mewadahi komplain dan permohonan untuk
                        mempermudah para perangkat daerah di kota malang dalam mengkomunikasikan masalah untuk mendapatkan
                        layanan dalam ruang lingkup IT.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead text-white">Langkah pertama mendaftar adalah klik tombol sign in, jika belum memiliki
                        akun, harap sign up terlebih dahulu. Kemudian lengkapi data dan berkas yang diminta.</p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="/login">
                    Login
                </a>
            </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Telepon / Email</h4>
                    <p style="color:white; font-size: 16px;">(0341) 751550<br>kominfo@malangkota.go.id</p>                
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Media Sosial</h4>
                    <a class="img-fluid img-thumbnail rounded-circle" href="https://www.facebook.com/kominfomalang/" target="_blank"><i
                            class="fab fa-fw fa-facebook-f "></i></a> &nbsp;&nbsp;
                    <a class="img-fluid img-thumbnail rounded-circle" target="_blank" href="https://twitter.com/kominfomalang?s=11&t=WEr1e_-eBi67M-6Wf1Nngg"><i
                            class="fab fa-fw fa-twitter"></i></a> &nbsp;&nbsp;
                    <a class="img-fluid img-thumbnail rounded-circle" target="_blank" href="https://www.instagram.com/kominfomalang/"><i
                            class="fab fa-fw fa-brands fa-instagram"></i></a> &nbsp;&nbsp;
                    <a class="img-fluid img-thumbnail rounded-circle" target="_blank" href="https://kominfo.malangkota.go.id/"><i
                            class="fab fa fa-fw fa-solid fa-globe"></i></a> &nbsp;
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Alamat</h4>
                    <p style="color:white; font-size: 16px;">Perkantoran Terpadu Pemerintah Kota Malang, Gedung A Lantai 4,
                        Jl. Mayjen Sungkono, Arjowinangun, Kec. Kedungkandang, Kota Malang, Jawa Timur 65132</p>
            
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>© Copyright Dinas Komunikasi dan Informatika Kota Malang </small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>


    <!-- Modals-->
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2>LOGIN</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded-circle" src="{{ asset('loginiconputih.jpg') }}"
                                    width="45%" alt="" />
                                <!-- Portfolio Modal - Text-->

                                <div class="d-sm-flex justify-content-center mt-4">
                                    <h4>Panduan (Login):</h4>
                                </div>
                                <div style="text-align: justify;" class="mt-2">
                                    <ol>
                                        <li>
                                            Ketikkan username dan password Anda pada kolom yang telah disediakan
                                        </li>
                                        <li>
                                            Setelah yakin username dan password yang diinputkan benar, klik tombol login
                                        </li>
                                        <li>
                                            Apabila username dan password yang dimasukkan sesuai, maka Anda akan
                                            otomatis diarahkan pada tampilan form-form layanan
                                        </li>
                                    </ol>
                                </div>
                                <button class="btn btn-primary mt-2" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Portfolio Modal 3-->

    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2>MEMILIH MENU</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded-circle" src="{{ asset('pilih.jpg') }}" width="45%"
                                    alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                <div class="d-sm-flex justify-content-center">
                                    <h4>Panduan Singkat (Memilih Menu):</h4>
                                </div>
                                <div style="text-align: justify;" class="mt-2">
                                    <ol>
                                        <li> Pada bagian navbar menu, terdapat beberapa layanan yang dapat digunakan
                                            oleh user, yaitu Laporan Permasalahan WI-FI RW, Permohonan Subdomain,
                                            Permohonan Migrasi Server, Permohonan Pembuatan Aplikasi, Permohonan
                                            Pengembangan Aplikasi, dan Permohonan Narasumber dan Pendamping.</li>
                                        <li>
                                            Pilih salah satu menu tersebut sesuai dengan layanan yang dibutuhkan.
                                        </li>
                                        <li>
                                            Kemudian isi form yang dibutuhkan sesuai dengan data yang ada
                                        </li>
                                    </ol>
                                </div>
                                <button class="btn btn-primary mt-2" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Portfolio Modal 1-->


    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2>PENGISIAN FORM PENGAJUAN</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded-circle" src="{{ asset('isi.jpg') }}" width="45%"
                                    alt="" />
                                <!-- Portfolio Modal - Text-->

                                <div class="d-sm-flex justify-content-center mt-3">
                                    <h4>Panduan Singkat (Pengisian Form Pengajuan):</h4>
                                </div>
                                <div style="text-align: justify;" class="mt-2">
                                    <ol>
                                        <li> Setelah memilih layanan yang dibutuhkan, isi form yang disediakan dengan
                                            benar dan lengkap sesuai dengan identitas.</li>
                                        <li>
                                            Lalu, cek kembali data isian anda dengan teliti.
                                        </li>
                                        <li>
                                            Setelah anda yakin dengan semua data yang anda input, klik submit. setelah
                                            data di submit data tidak dapat diubah.
                                        </li>
                                    </ol>
                                </div>

                                <button class="btn btn-primary mt-2" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Portfolio Modal 2-->
@endsection
