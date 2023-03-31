@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Paket Harga</h1>
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
                            <form action="{{route('price_list.update', $item->id)}}" method="POST">
                                @method("PUT")
                                @csrf
                                <div class="form-group">
                                    <label for="products_id">Produk</label>
                                    <select name="products_id" required class="form-control">
                                        <option value="{{$item->products_id}}" selected>{{$item->products->title}}</option>
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">
                                                {{$product->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Nama Paket</label>
                                    <input type="text" class="form-control" name="title" placeholder="Masukan nama produk" value="{{$item->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="number" class="form-control" name="price" placeholder="Masukan harga mulai dari..." value="{{$item->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="material">Keuntungan atau Syarat Paket Ini</label>
                                    @for ($i = 0; $i < 4; $i++)
                                        <input type="hidden" class="form-control" name="description[{{$i}}][key]" value="{{ $item->description[$i]['key'] ?? '' }}">
                                        <input type="text" class="form-control my-2" name="description[{{$i}}][value]" placeholder="Contoh: Sablon rubber 4 warna" value="{{ $item->description[$i]['value'] ?? '' }}">
                                    @endfor
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection