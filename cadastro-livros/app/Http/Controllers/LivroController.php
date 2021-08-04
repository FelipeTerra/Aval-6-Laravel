<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 
                'titulo'   => 'required|min:2|unique:livros',
                'autor'    => 'required|min:5',
                'preco'    => 'required|numeric|gt:0',
                'editora'  => 'required|min:5',
            ],
            [
                'titulo.required'   => 'O título do livro é obrigatório',
                'titulo.min'        => 'O título deve ter no mínimo duas letras',
                'titulo.unique'     => 'Título já cadastrado',
                'autor.required'    => 'O nome do autor é obrigatório',
                'autor.min'         => 'O nome do autor deve ter no mínimo cinco letras',
                'preco.required'    => 'O preço é obrigatório',
                'preco.numeric'     => 'O preço deve ser um valor numérico',
                'preco.gt'          => 'O preço é deve ser maior que zero',
                'editora.required'  => 'O nome da editora é obrigatório',
                'editora.min'       => 'O nome da editora deve ter no mínimo cinco letras',
            ]
        );

        $livro = new Livro();
        $livro->titulo     = $request->titulo;
        $livro->autor      = $request->autor;
        $livro->isbn       = $request->isbn;
        $livro->preco      = $request->preco;
        $livro->editora    = $request->editora;
        $livro->lancamento = $request->lancamento;
        $livro->save();

        return redirect()->route('livros.index')-> with('msg_success' , 'Livro cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $request->validate(
            [ 
                'titulo'   => [
                    'required',
                    'min:2',
                    Rule::unique('livros')->ignore($livro->id)
                ],
                'autor'    => 'required|min:5',
                'preco'    => 'required|numeric|gt:0',
                'editora'  => 'required|min:5',
            ],
            [
                'titulo.required'   => 'O título do livro é obrigatório',
                'titulo.min'        => 'O título deve ter no mínimo duas letras',
                'titulo.unique'     => 'Título já cadastrado',
                'autor.required'    => 'O nome do autor é obrigatório',
                'autor.min'         => 'O nome do autor deve ter no mínimo cinco letras',
                'preco.required'    => 'O preço é obrigatório',
                'preco.numeric'     => 'O preço deve ser um valor numérico',
                'preco.gt'          => 'O preço é deve ser maior que zero',
                'editora.required'  => 'O nome da editora é obrigatório',
                'editora.min'       => 'O nome da editora deve ter no mínimo cinco letras',
            ]
        );

        $livro->titulo     = $request->titulo;
        $livro->autor      = $request->autor;
        $livro->isbn       = $request->isbn;
        $livro->preco      = $request->preco;
        $livro->editora    = $request->editora;
        $livro->lancamento = $request->lancamento;
        $livro->save();

        return redirect()->route('livros.index')-> with('msg_success' , 'Livro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')-> with('msg_success' , 'Livro removido com sucesso');
    }
}
