@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Livros</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('livros.store') }}" class="card p-2 my-4" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text"   placeholder="Título do Livro"   class="form-control" name="titulo"     required>
                    <input type="text"   placeholder="Autor Principal"   class="form-control" name="autor"      required>
                    <input type="text"   placeholder="ISBN"              class="form-control" name="isbn"       required>
                    <input type="number" step="0.01" placeholder="Preço" class="form-control" name="preco"      required>
                    <input type="text"   placeholder="Editora"           class="form-control" name="editora"    required>
                    <input type="text"   placeholder="Ano de lançamento" class="form-control" name="lancamento" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                    </div>
                </div>

                @error("titulo")
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror

                @error("autor")
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror

                @error("editora")
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror

            </form>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar</a>
        </div>
    </div>

</div>

@endsection