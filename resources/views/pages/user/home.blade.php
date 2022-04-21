@extends('layouts.home')

@section('content')
<!-- count data -->
<section class="pt-2 pb-3" id="count-stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto py-3">
                <div class="row">
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h2 class="text-gradient text-primary">
                                <span id="state1" countTo="117">0</span>+
                            </h2>
                            <h6 class="mt-2">Resep Makanan</h6>
                            <p class="text-sm font-weight-normal">
                                From buttons, to inputs, navbars, alerts or cards, you are
                                covered
                            </p>
                        </div>
                        <hr class="vertical dark" />
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h2 class="text-gradient text-primary">
                                <span id="state2" countTo="74">0</span>+
                            </h2>
                            <h6 class="mt-2">Resep Minuman</h6>
                            <p class="text-sm font-weight-normal">
                                From buttons, to inputs, navbars, alerts or cards, you are
                                covered
                            </p>
                        </div>
                        <hr class="vertical dark" />
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h2 class="text-gradient text-primary">
                                <span id="state3" countTo="95">0</span>+
                            </h2>
                            <h6 class="mt-2">Resep Tradisional</h6>
                            <p class="text-sm font-weight-normal">
                                From buttons, to inputs, navbars, alerts or cards, you are
                                covered
                            </p>
                        </div>
                        <hr class="vertical dark" />
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h2 class="text-gradient text-primary">
                                <span id="state4" countTo="114">0</span>+
                            </h2>
                            <h6 class="mt-2">Resep Modern</h6>
                            <p class="text-sm font-weight-normal">
                                From buttons, to inputs, navbars, alerts or cards, you are
                                covered
                            </p>
                        </div>
                        <hr class="vertical dark" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end count data -->

<!-- latest -->
<section class="latest">
    <div class="container">
        <h4 style="color: black;">Latest</h4>
        <div class="row isi">
            <div class="col-lg-12 mx-auto py-3">
                <div class="row">
                    @foreach ($items->take(4) as $item)
                    <div class="col-md-3 mx-auto d-flex justify-content-center">

                        <a href="{{ route('detail', $item->title) }}">
                            <div class="p-3 text-center">
                                <!-- <div class="col-lg-3 mt-2" data-aos="fade-up" data-aos-duration="500"> -->
                                <div class="" style="width: 18rem">
                                    <div class="position-absolute bg-dark px-3 py-2 rounded">
                                        <a href="{{ route('detail', $item->title) }}" class="text-white text-decoration-none">
                                            <small>{{ $item->type->name }}</small></a>
                                    </div>
                                    <div class="gambar">
                                        <!-- <img src="{{ url('frontend/assets/img/background2.jpg') }}" class="card-img-top rounded" style="height: 11rem" /> -->
                                        <img src="{{ asset('storage/'. $item->images) }}" class="card-img-top rounded" style="height: 11rem" />

                                    </div>
                                    <h5 class="card-title text-start mt-2" style="color: black;">{{ $item->title }}</h5>
                                    <p class="text-start desc" style="color: red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                        <small class="ms-1">{{ $item->duration }}</small>
                                    </p>
                                </div>
                                <!-- </div> -->

                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end latest -->



<!-- all article -->
<section>
    <div class="container mt-2">
        <h4 style="color: black;">All</h4>
        <div class="judul">
            @foreach ($items as $item)
            <a href="{{ route('detail', $item->title) }}" class="container">
                <section data-aos="fade-up" data-aos-duration="500">
                    <div class="zoom shadow">
                        <div class="row">
                            <div class="col-3 rounded">
                                <img src="{{ asset('storage/'. $item->images) }}" height="250px" width="100%" alt="" class="p-4 thumbnail1 mx-auto d-block" />
                            </div>
                            <h4 class="col-9 mt-5 text-start">
                                <!-- <h5>Rendang</h5> -->
                                <div class="row" style="color: black;">{{ $item->title }}</div>
                                <div class="col">
                                    <div class="row mt-2">
                                        <div class="col-3">
                                            <p class="mt-2">
                                                <small style="font-size: medium; color: black; font-weight: 500;">Makanan {{ $item->type->name }}</small>
                                            </p>
                                        </div>
                                        <div class="col-9">
                                            <p style="color: rgb(0, 0, 0);" class="mt-1">
                                                <small class="badge " style="background-color: rgb(233, 0, 0); color: rgb(255, 255, 255);"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                    <small class="ms-1">{{ $item->duration }}</small></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="mt-1 me-5">
                                        <small style="color: rgb(88, 88, 88)" class="me-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis soluta animi autem voluptatibus id vitae est necessitatibus officiis unde vero culpa assumenda ex, maxime aliquam sit quidem architecto quis odio, odit ipsum nostrum repudiandae explicabo. Enim cum exercitationem voluptatem modi, iusto nesciunt eaque molestias, culpa libero rem amet! Sit beatae culpa fugiat impedit facere ex? Blanditiis, ipsa unde. Eligendi, eveniet?</small>
                                    </p>
                                </div>
                            </h4>
                        </div>
                    </div>
                </section>
            </a>
            @endforeach
        </div>
        {{ $items->links() }}
    </div>
</section>
<!-- end all article -->

<section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center text-center my-sm-5">
                <div class="col-lg-6">
                    <span class="badge bg-primary mb-3">OUR ADVANTAGE</span>
                    <h2 class="text-dark mb-0">FoodRecP</h2>
                    <p class="lead">
                        Kami bekerja sama dengan banyak chef profesional dan juga beberapa sekolah masak yang cukup dikenal di Indonesia. Sehingga, jangan ragu untuk mengikuti resep yang telah kami sediakan.
                    </p><br>
                    <p>TERIMA KASIH</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection