@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Livros</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{ route('livros.create') }}" class="btn btn-primary active"
               role="button" aria-pressed="true">Novo Livro</a>
        </div>
    </div>

    @if (session('msg_success'))
    <div class="alert alert-success" role="alert">
        {{ session('msg_success') }}
    </div>        
    @endif

    @if (session('msg_error'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg_error') }}
    </div>        
    @endif

    @if (count($livros) > 0)
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Autor Principal</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Editora</th>
                        <th scope="col">Ano de Lançamento</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livros as $l)
                    <tr>
                        <th scope="row">{{ $l->id }}</th>
                        <td>{{ $l->titulo     }}</td>
                        <td>{{ $l->autor      }}</td>
                        <td>{{ $l->isbn       }}</td>
                        <td>{{ $l->preco      }}</td>
                        <td>{{ $l->editora    }}</td>
                        <td>{{ $l->lancamento }}</td>
                        <td>
                            <form action="{{ route('livros.destroy',  $l->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                                <a class="btn btn-primary btn-sm active" href="{{ route('livros.edit',  $l->id) }}">Editar</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
    @endif
</div>
@endsection