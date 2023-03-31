@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Harga</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Content Row -->
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{route('price_list.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="products_id">Produk</label>
                                    <select name="products_id" required class="form-control">
                                        <option value="">Pilih Produk</option>
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">
                                                {{$product->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Nama Paket</label>
                                    <input type="text" class="form-control" name="title" placeholder="Contoh: Paket A" value="{{old('title')}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="number" class="form-control" name="price" placeholder="Masukan harga..." value="{{old('price')}}">
                                </div>
                                <div class="form-group">
                                    <label for="material">Keuntungan atau Syarat Paket Ini</label>
                                    @for ($i = 0; $i < 4; $i++)
                                        <input type="hidden" class="form-control" name="description[{{$i}}][key]" value="{{$i}}">
                                        <input type="text" class="form-control my-2" name="description[{{$i}}][value]" placeholder="Contoh: Sablon rubber 4 warna" value="{{old('description['.$i.'][value]')}}">
                                    @endfor
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Simpan
                                </button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection