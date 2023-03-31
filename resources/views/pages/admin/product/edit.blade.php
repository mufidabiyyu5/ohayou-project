@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
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
                            <form action="{{route('product.update', $item->id)}}" method="POST">
                                @method("PUT")
                                @csrf
                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" required class="form-control">
                                        <option value="{{$item->category_id}}">Jangan diubah</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Nama Produk</label>
                                    <input type="text" class="form-control" name="title" placeholder="Masukan nama produk" value="{{$item->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga mulai dari ...</label>
                                    <input type="number" class="form-control" name="price" placeholder="Masukan harga mulai dari..." value="{{$item->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi Produk</label>
                                    <textarea name="description" rows="10" class="d-block w-100 form-control">{{$item->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sold">Telah terjual</label>
                                    <input type="number" class="form-control" name="sold" placeholder="Terjual berapa pcs?" value="{{$item->sold}}">
                                </div>
                                <div class="form-group">
                                    <label for="material">Bahan</label>
                                    <input type="text" class="form-control" name="material" placeholder="Contoh: Cotton Combed 30s" value="{{$item->material}}">
                                </div>
                                <div class="form-group">
                                    <label for="isbestselling">Apakah produk ini salah satu yang paling laris?</label>
                                    <select name="isbestselling" required class="form-control">
                                        <option value="{{$item->isbestselling}}">Pilih Opsi</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
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