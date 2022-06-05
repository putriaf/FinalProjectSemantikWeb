@extends('layout')

@section('content')
    <div class="section" style="padding-top: 25%">
        <div class="absolute-center">
            <div class="section jumbotron-section">
                <div class="container">
                    <div class="row justify-content-between">
                        <h2 class="text-center font-weight-600 mb-5">All Search Result</h2>
                        <form class="d-flex" method="POST" action="/search">
                            @csrf
                            <input class="form-control me-2 search-box" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success jumbotron-cta" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" style="padding: 0">
        <div class="container">
            @php($i=0)
            @php($countNull=0)
            <div class="row">
                @foreach($search as $searchresult)
                @if($searchresult->numRows() > 0)
                <div class="mb-4">
                    <div class="row mb-3">
                        <h3>Search "{{$varsearch}}" by {{array_keys($search)[$i]}}</h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        @foreach($searchresult as $data)
                        <div class="col-md-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <h5 class="card-title">{{ $data->phoneName }}</h5>
                                <p class="card-text">Producted by {{ $data->phoneBrand }}</p>
                                <p class="card-text">Chipset {{ $data->chipset }}</p>
                                <p class="card-text">RAM {{ $data->batteryCapacity }}</p>
                                <p class="card-text mb-4">RAM {{ $data->price }}</p>
                                <a href="/smartphone/{{ $data->phoneID }}" class="btn btn-primary" style="background-color: #1475a6">Detail</a>
                              </div>
                            </div>
                          </div>
                        @endforeach
                    </div>
                </div>
                @else
                @php($countNull++)
                @endif
                @php($i++)
                @endforeach
            </div>
            @if($countNull >= 12)
                <h6 class="no-file">Tidak ada smartphone yang sesuai dengan kata kunci</h6>
            @endif
        </div>
    </div>
@endsection