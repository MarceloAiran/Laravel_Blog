@extends('layouts.app')

@section('content')

<div class="card panel-default">

    <div class="card-header">
        Categorias
    </div>
    <a href="{{ route('category.create') }}" class="btn btn-sm btn-success">Cadastrar Categoria +</a>    
    <table class="table table-hover">

        <thead>
            <th>Nome Categoria</th>
            <th>Editar</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->name }} </td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('category.delete', ['id' => $category->id ] ) }}" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <th>
                    <th colspan="5" class="text-center">Não existe categorias.</th>
                </th>
            @endif
        </tbody>
    </table>
</div>


@stop