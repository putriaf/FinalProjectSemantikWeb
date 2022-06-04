<div class="page-wrapper">
    @if (is_array($result) || is_object($result)) 
    @foreach($result as $data)
    <div class="container cont-resDetail">
        <h1 class="txt-ask">{{$data->phoneName}}</h1>

        <div class="row">
            <div class="col-md-4">
                {{-- <img src="{{$data->image}}" alt="data" width="100%"> --}}
            </div>
            <div class="col-md-8">
                <div class="row" style="margin:10px 0 10px 0">
                    <div class="col-md-6">
                    <div class="row" style="background-color: #C4C4C4; justify-content:center">
                        <p>Range Harga : </p>  
                            <p>hihi</p>
                            <p>-</p>
                            <p>hihi</p>
                        </div>
                    </div>
                </div>

                <div class="row" style="font-size:24px">
                    <label class="col-md-3" style="color: #F88938">Name</label>
                    <p class="col-md-9">{{$data->phoneName}}</p>

                    <label class="col-md-3" style="color: #F88938">Category</label>
                    <p class="col-md-9">{{$data->phoneBrand}}</p>

                    <label class="col-md-3" style="color: #F88938">Special Menu</label>
                    <p class="col-md-9">{{$data->batteryCapacity}}</p>

                    <label class="col-md-3" style="color: #F88938">Alamat</label>
                    <p class="col-md-9">{{$data->price}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
