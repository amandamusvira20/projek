@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <img src="{{ url('images/logoreal.png') }}"class="rounded mx-auto d-block" width="200" alt="">
    </div>
    @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ url('uploads')}}" class="card-img-top" alt="..">
                <div class="card-body">
                  <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                  <p class="card-text">
                    <strong>Harga : </strong>Rp. {{ number_format($barang->harga) }} <br>
                    <strong>Stok : </strong> {{ $barang->stok }} <br>
                    <strong>Keterangan : </strong>{{ $barang->Keterangan }}
                </p>
                  <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary">Masukkan Keranjang</a>
                </div>
              </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
