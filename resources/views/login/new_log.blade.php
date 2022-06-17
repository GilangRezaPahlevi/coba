@extends('..layout.lay1')

@section('container')
<body class="text-center" style="background-color: whitesmoke;">
    <main class="form-signin">
        <div class="position-absolute top-50 start-50 translate-middle">
            <img src="../img/logo.png" alt="logo" width="72" height="57" class="mb-4">
            <h1 class="h3 mb-3 fw-normal">REGISTER</h1>
            <div class="">
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        {{-- @error digunakan untuk menampilakn error yang di buat di controller --}}
                        <input type="text" name="name" class="form-control @error('username') is-invalid @enderror" id="user" autofocus 
                        autocomplete="off" required value="{{ old('username') }}">
                        {{-- {{ old('username') berfungsi mengambil data yg sebelumnya pernah diisi }} --}}
                        <label for="user">Username :</label>
                        @error('username')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autocomplete="off" required value="{{ old('email') }}">
                        <label for="email">Email :</label>
                         @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
                    </div>
                    <div class="form-floating mb-5">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="pass" name="password" required>
                        <label for="pass">Password :</label>
                         @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
                    </div>
                    <button type="submit" class="w-75 btn btn-lg btn-primary">Login!</button>
                </form>
            </div>
        </div>
    </main>
</body>
@endsection