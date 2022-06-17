@extends('..layout.lay1')

@section('container')
<body class="text-center" style="background-color: whitesmoke;">
    <main class="form-signin">
        <div class="position-absolute top-50 start-50 translate-middle">
            <img src="../img/logo.png" alt="logo" width="72" height="57" class="mb-4">
            <h1 class="h3 mb-3 fw-normal">Login Admin</h1>
        @if (session('succes'))
                <p style="color: red; font-style:italic;">{{ session('succes') }}</p>
        @endif
        @if (session('error'))
                <p style="color: red; font-style:italic;">{{ session('error') }}</p>
        @endif
            <div class="">
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus autocomplete="off" required value="{{ old('email') }}">
                        <label for="email">email:</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-5">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="pass"  required value="{{ old('password') }}">
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