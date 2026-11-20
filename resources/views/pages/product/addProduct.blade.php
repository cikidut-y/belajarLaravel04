@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">Tambah Data Produk</div>
    <div class="card-body">
        <form action="/product" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="name_product" class="form-control" value="{{old('name_product')}}">
                        {{-- kita berikan pesan jika terjadi error --}}
                        @error('name_product')
                        <div id="nameHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Stock Produk</label>
                        <input type="number" name="stock_product" class="form-control" value="{{old('stock_product')}}">
                        {{-- kita berikan pesan jika terjadi error --}}
                        @error('stock_product')
                        <div id="stockHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Harga Produk</label>
                        <input type="number" name="price_product" class="form-control" value="{{old('price_product')}}">

                        @error('price_product')
                        <div id="priceHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name='desc_product'
                            rows="10">{{old('desc_product')}}</textarea>
                        <label>Deskripsi Produk</label>
                        {{-- kita berikan pesan jika terjadi error --}}
                        @error('desc_product')
                        <div id="descHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 mt-3">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
