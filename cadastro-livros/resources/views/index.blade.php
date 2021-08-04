@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Livros Cadastrados</h2>
    </div>

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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Nenhum livro cadastrado</h5>
            </div>
        </div>
    @endif
</div>


@endsection