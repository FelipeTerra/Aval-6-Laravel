@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Livros</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{-- TODO --}}" class="btn btn-primary active"
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

    {{-- TODO --}}
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
                    {{-- TODO --}}
                    <tr>
                        <th scope="row">{{-- TODO --}}</th>
                        <td>{{-- TODO --}}</td>
                        <td>{{-- TODO --}}</td>
                        <td>{{-- TODO --}}</td>
                        <td>{{-- TODO --}}</td>
                        <td>{{-- TODO --}}</td>
                        <td>
                            <form action="{{-- TODO --}}" method="POST">
                                {{-- TODO --}}
                                {{-- TODO --}}
                                {{-- <button type="submit" class=" btn btn-danger btn-sm">
                                    Apagar
                                </button> --}}
                                <!-- <a class="btn btn-primary btn-sm active" href="{{-- TODO --}}">Detalhes</a> -->
                            </form>
                        </td>
                    </tr>
                    {{-- TODO --}}

                </tbody>
            </table>

        </div>
    </div>
    {{-- TODO --}}
</div>
@endsection