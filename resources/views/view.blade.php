@extends('layout')

@section('content')
@if (is_array($result) || is_object($result)) 
@foreach($result as $data)
<div class="section" style="padding-top: 25%;">
    <div class="absolute-center">
        <div class="section jumbotron-section">
            <div class="container">
                <div class="row justify-content-between">
                    <h2 class="text-center font-weight-600 mb-5">{{ $data->phoneName }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <h4 class="text-center font-weight-600">Specifications</h4>
        <div class="row mt-5">
            <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row">Phone Brand</th>
                    <td>{{ $data->phoneBrand }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Battery Capacity</th>
                    <td>{{ $data->batteryCapacity }} mAH</td>
                  </tr>
                  <tr>
                    <th scope="row">Chipset / Processor</th>
                    <td>{{ $data->chipset }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Weight</th>
                    <td>{{ $data->weight }} gram</td>
                  </tr>
                  <tr>
                    <th scope="row">Operating System</th>
                    <td>{{ $data->operatingSystem }}</td>
                  </tr>
                  <tr>
                    <th scope="row">RAM</th>
                    <td>{{ $data->RAM }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Memory Capacity</th>
                    <td>{{ $data->memoryCapacity }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Diagonal Width</th>
                    <td>{{ $data->diagonalWidth }} "</td>
                  </tr>
                  <tr>
                    <th scope="row">Camera</th>
                    <td>{{ $data->camera }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Price</th>
                    <td>IDR {{ $data->price }}</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach
@endif
@endsection