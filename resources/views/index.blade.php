@extends('layout')

@section('content')
<div class="section full-height">
    <div class="absolute-center">
        <div class="section jumbotron-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
                        <h1 class="font-weight-600">Phonology</h1>
                        <p>Technology evolves over time and you can't stop it. New smartphones with fantastic features appear, while others become obsolete. Confused about which one to choose? You can search it now and buy one according to your needs!</p>
                        <form class="d-flex" method="POST" action="/search">
                            @csrf
                            <input class="form-control me-2 search-box" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success jumbotron-cta" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <img src="{{ asset('img/header-img.jpg') }}" alt="Hero Image" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section usp-section">
    <div class="container">
        <h2 class="text-center font-weight-600">Mengapa Harus Phonology?</h2>
        <div class="row mt-5">
            <div class="col-md col-6 usp-item ">
                <img src="{{ asset('img/easy.png') }}" alt="Easy">
                <h3 class="mt-2">Mudah</h3>
                <p>Cukup ketikkan nama smartphone, brand, atau spesifikasi yang kamu inginkan.</p>
            </div>
            <div class="col-md col-6 usp-item">
                <img src="{{ asset('img/refresh.png') }}" alt="Up to Date">
                <h3 class="mt-2">Up to Date</h3>
                <p>Data Phonology adalah data terbaru dari seluruh brand yang ada.</p>
            </div>
            <div class="col-md col-6 usp-item">
                <img src="{{ asset('img/correct.png') }}" alt="Lengkap">
                <h3 class="mt-2">Lengkap</h3>
                <p>Kami selalu berusaha untuk menampilkan smartphone sesuai dengan yang kamu butuhkan.</p>
            </div>
            <div class="col-md col-6 usp-item">
                <img src="{{ asset('img/free.png') }}" alt="Free">
                <h3 class="mt-2">Gratis</h3>
                <p>Kamu bebas mengakses website Phonology secara gratis.</p>
            </div>
        </div>
    </div>
</div>
<div class="section max-h-full pb-24 my-auto bg-white dark:bg-gray-800">
    <h2 class="text-center font-weight-600 mb-5">All Smartphones</h2>
    <div class="row px-5 mb-5">
        <div class="col-4">
            <a href="/sort/price" class="btn btn-primary" style="background-color: #053046; color: #fff">Sort By Price</a>
            <a href="/sort/battery" class="btn btn-primary" style="background-color: #053046; color: #fff">Sort By Battery Capacity</a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-5">
        @foreach($unique as $data)
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $data->phoneName }}</h5>
                <p class="card-text">Producted by {{ $data->phoneBrand }}</p>
                <p class="card-text">Chipset {{ $data->chipset }}</p>
                <p class="card-text">{{ $data->batteryCapacity }} mAH</p>
                <p class="card-text mb-4">IDR {{ $data->price }}</p>
                <a href="/smartphone/{{ $data->phoneID }}" class="btn btn-primary" style="background-color: #1475a6">Detail</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection