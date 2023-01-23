@extends('layouts.main')
@section('content')

    @if ($barang->count() == 0)
        <h1>barang kosong</h1>
    @else
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h5>detail barang user {{ $user->name }}</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">name</th>
                            <th scope="col">detail</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($barang as $item => $v)
                            <tr>
                                <th scope="row">{{ ++$item }}</th>
                                <td>{{ $v->barang }}</td>
                                <td>
                                    <a href="/detail/{{ $v->id }}" class="btn btn-info">detail</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection
