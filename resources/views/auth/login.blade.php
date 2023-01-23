@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">

            @if (session('sukses'))
                <p class="alert alert-sukses">{{ session('sukses') }}</p>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            
            <form action="/login" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
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
