@extends('layouts.login')

@section('title')
    Login Admin - Ohayou.Co
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card-login">
                <div class="text-center mx-auto">
                    <img src="frontend/assets/images/Logo.png" alt="Logo" width="64" height="64">
                </div>
                <h3>Login Admin</h3>
                <p>Ohayou! Selamat Datang Kembali Silahkan Masuk untuk ke Dashboard Admin</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="d-block mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Contoh: admin@xyz.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-block mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Minimal 8 karakter" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-login">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection