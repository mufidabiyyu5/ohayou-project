@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Admin</h1>
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
                            <form action="{{route('list_admin.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="hidden" class="form-control" name="name" placeholder="Contoh: Bambang" value="{{$item->name}}">
                                    <input type="text" disabled class="form-control" name="name" placeholder="Contoh: Bambang" value="{{$item->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {{-- <input type="hidden" class="form-control" name="email" placeholder="Contoh: Bambang" value="{{$item->email}}"> --}}
                                    <input type="email" disabled class="form-control" name="email" placeholder="Contoh: admin@ohayou.xyz" value="{{$item->email}}">
                                </div>
                                {{-- <input type="hidden" class="form-control" name="password" placeholder="Minimal 8 karakter" value="{{$item->password}}">
                                <input type="hidden" class="form-control" name="password-confirmation" placeholder="Minimal 8 karakter" value="{{$item->password}}"> --}}
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" required class="form-control">
                                        <option value="{{$item->role}}">Pilih Role</option>
                                        <option value="SUPERADMIN">SUPERADMIN</option>
                                        <option value="ADMIN">ADMIN</option>
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