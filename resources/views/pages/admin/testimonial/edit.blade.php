@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Testimoni</h1>
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
                            <form action="{{route('testimonial.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div class="form-group">
                                    <label for="customer">Nama Customer</label>
                                    <input type="text" class="form-control" name="customer" placeholder="Contoh: Bambang" value="{{$item->customer}}">
                                </div>
                                <div class="form-group">
                                    <label for="about_customer">Bio Customer</label>
                                    <input type="text" class="form-control" name="about_customer" placeholder="Contoh: Pembeli di Shopee" value="{{$item->about_customer}}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto Customer Max: 2MB</label>
                                    <input type="file" name="image" class="form-control" placeholder="Max: 2MB">
                                </div>
                                <div class="form-group">
                                    <label for="testimoni">Testimoni</label>
                                    <textarea name="testimoni" rows="10" class="d-block w-100 form-control">{{$item->testimoni}}</textarea>
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