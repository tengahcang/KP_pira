<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>INDIBIZ</title>
    <!-- All CSS -->
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('indexpel.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning"><img src="{{ asset('img/indibiz.png') }}"
                        style="height: 40px; width: 160px;"></a> <button aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/indexpelanggan') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/layananpelanggan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/laporanpelanggan') }}">Laporan</a>
                    </li>
                    {{-- @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/statuslaporan') }}">Status Laporan</a>
                            {{ Auth::user()->username }}
                        </li>
                    @endauth --}}
                    <li class="nav-item">
                        <a href="{{ url('/loginpelanggan') }}" class="nav-link"><i
                                class="bi bi-person-circle"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="{{ asset('img/cover1.jpg') }}">
            </div>

        </div>

        <!-- Contact starts -->
        <section class="contact section-padding" id="contact">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <img src="{{ asset('img/indibiz.png') }}" style="height: 60px; width: 210px;">
                            <p></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="row m-0">
                    <div class="col-md-12 p-0 pt-4 pb-3">
                        <!--for getting the form download the code from download button-->
                    </div>
                </div> --}}
            </div>
        </section><!-- contact ends -->

        <!-- about section starts -->
        <section class="about section-padding" id="about" style="background-color:#3498db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-9 col-12">
                        <div class="about-img" style="padding-top: 20px; padding-bottom: 20px;"><img alt=""
                                class="img-fluid" src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-3">
                        <div class="about-text" style="padding-top:15px">
                            <h2>We Provide the Best Quality<br>
                                Services Ever</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis.
                                Assumenda
                                eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae
                                tempora,
                                explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel,
                                nostrum
                                explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste
                                odio
                                est non earum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- about section Ends -->

        <!-- services section Starts -->
        <section class="services section-padding" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-md-5">
                        <div class="section-header text-center pb-5">
                            <h2>Our Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur<br>
                                adipisicing elit. Non, quo.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    @foreach ($layanans as $index => $layanan)
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center bg-dark pb-2">
                                <div class="card-body">
                                    <i class="bi bi-laptop"></i>
                                    <h3 class="card-title">{{ $layanan->nama_layanan }}</h3>
                                    <p class="lead">{{ $layanan->detail }}</p><button
                                        class="btn bg-warning text-dark">Read More</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- services section Ends -->

        <!-- footer starts -->
        <footer class="bg-dark p-2 text-center mt-md-5">
            <div class="container">
                <p class="text-white">All Right Reserved By @website Name</p>
            </div>
        </footer>
        <!-- footer ends -->

        <!-- All Js -->
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
