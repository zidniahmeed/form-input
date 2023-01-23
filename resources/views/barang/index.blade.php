@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">name</th>
                    <th scope="col">detail</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item => $v)
                    <tr>
                        <th scope="row">{{++$item}}</th>
                        <td>{{$v->name}}</td>
                        <td>
                          <a href="/detail/{{$v->id}}" class="btn btn-info">detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </div>
@endsection
