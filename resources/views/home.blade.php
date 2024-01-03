@extends('layouts.main')

@section('title', $title)

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span class="d-none d-lg-block">Dibuat oleh <a href="#">Tim JRP</a></span>
                                <hr>
                            </h5>
                            <h1>
                                Selamat Datang
                            </h1>
                            <h5 style="opacity: 0.8;"></h5>
                            <img class="gambar-depan" src="assets/img/jrpImg.png" alt="" width="615px">
                            <hr>

                            <!-- Isi Start -->
                            

                            <!-- Isi End -->
                        </div>
                    </div><!-- End Default Card -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->

@endsection