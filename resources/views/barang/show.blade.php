@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('barang') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('barang.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/barangs/') }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $barang->nama }}</h4>
                    <p class="tmt-3 mt-3">
                        Harga : {{ number_format($barang->harga_barang, 2) }}
                    </p>      
                    <p class="tmt-3">
                        Harga : {{ number_format($barang->stok_barang, 3) }}
                    </p><p class="tmt-3">
                        Harga : {{($barang->id_merek) }}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection