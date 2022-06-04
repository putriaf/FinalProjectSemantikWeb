    <div class="page-wrapper">
        <div class="container">
            @php($i=0)
            @php($countNull=0)
            <div class="row">
                @foreach($search as $searchresult)
                @if($searchresult->numRows() > 0)
                <div class="row" style="width:100%">
                <h3 class="txt-ask">Search "{{$varsearch}}" by {{array_keys($search)[$i]}}</h3>
                </div>
                <div class="row row-tes">
                @foreach($searchresult as $data)
                <div class="col-md-3">
                    <div class="card">
                        <div class="img-card">
                            <a href="/smartphone/{{$data->phoneID}}">
                                <h3>{{ $data->phoneName }}</h3>
                            </a>
                        </div>
                        <div class="container cont-card">
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