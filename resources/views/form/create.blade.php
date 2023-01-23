@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="/form/store" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama pembeli</label>
                    <input type="text" readonly class="form-control" value="{{ Auth::user()->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10"
                        class="form-control @error('alamat') is-invalid @enderror">{{old('alamat')}}</textarea>
                    @error('name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">no telepon</label>
                    <input type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror"
                        value="{{ old('no_telepon') }}">
                    @error('no_telepon')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Barang</label>
                    <input type="text" name="barang" class="form-control @error('barang') is-invalid @enderror"
                        value="{{ old('barang') }}">
                    @error('barang')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                        value="{{ old('harga') }}">
                    @error('harga')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">jumlah</label>
                    <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"
                        value="{{ old('jumlah') }}">
                    @error('jumlah')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
