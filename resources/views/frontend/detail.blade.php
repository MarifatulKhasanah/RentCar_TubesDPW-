@extends('layouts.frontend')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Car Details</h1>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ URL('frontend/assets/Mobil/' . $car->gambar) }}" alt="Car Image">

                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div>
                                <!-- Product name-->
                                <h3 class="fw-bolder text-primary">Description</h3>
                                <p>{{ $car->deskripsi }}</p>

                                <div class="mobil-info-list border-top pt-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>P3K</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>CHARGER</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>AUDIO</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>AC</span>
                                        </li>
                                        <!-- Add other details here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bolder">{{ $car->nama_mobil }}</h5>
                                    <div class="rent-price mb-3">
                                        <span style="font-size: 1rem" class="text-primary">
                                            Rp. {{ number_format($car->harga_sewa, 0, ',', '.') }}/day
                                        </span>
                                    </div>
                                </div>

                                <ul class="list-unstyled list-style-group">
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Fuel</span>
                                        <span style="font-weight: 600">{{ $car->bahan_bakar }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Chairs Amount</span>
                                        <span style="font-weight: 600">{{ $car->jumlah_kursi }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Transmission</span>
                                        <span style="font-weight: 600">{{ $car->transmisi }}</span>
                                    </li>
                                    <!-- Add other details here -->
                                </ul>
                            </div>
                        </div>

                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent">
                            <div class="text-center">
                                <a href="https://wa.me/+62895377044585"
                                   class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                                   style="column-gap: 0.4rem">
                                    Rent This Car <i class="ri-whatsapp-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
