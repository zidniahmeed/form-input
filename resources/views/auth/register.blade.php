@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}">

                    @error('name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">

                    @error('email')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password </label>
                    <input type="password" class="form-control  @error('password_confirm') is-invalid @enderror"
                        name="password_confirm" value="{{ old('password_confirm') }}">
                    @error('password_confirm')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex ">
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1"
                                value="petugas">
                            <label class="form-check-label" for="flexRadioDefault1">
                                petugas
                            </label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" checked
                                value="perusahaan">
                            <label class="form-check-label" for="flexRadioDefault2">
                                perusahaan
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
