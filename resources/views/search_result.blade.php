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
    <div class="section">
        <div class="container">
            @php($i=0)
            @php($countNull=0)
            <div class="row">
                @foreach($search as $searchresult)
                @if($searchresult->numRows() > 0)
                <div class="row" style="width:100%">
                <h3 class="txt-ask">Search "{{$varsearch}}" by {{array_keys($search)[$i]}}</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 px-5">
                    @foreach($searchresult as $data)
                    <div class="col-md-4">
                      <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $data->phoneName }}</h5>
                          <p class="card-text">{{ $data->phoneBrand }}</p>
                          <a href="/smartphone/{{ $data->phoneID }}" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                @else
                @php($countNull++)
                @endif
            
                @php($i++)
                @endforeach
            </div>
            @if($countNull >= 12)
                <h5 class="no-file">Tidak ada data yang cocok dengan input pencarian</h5>
            @endif
        </div>
    </div>
@endsection