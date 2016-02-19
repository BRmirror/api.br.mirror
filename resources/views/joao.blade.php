@extends('layout')
@section('content')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('pedaco' , ['nome' => 'joao'])
    @include('pedaco' , ['nome' => 'bololo'])
@endsection