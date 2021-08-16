@extends('layouts.app')

@section('content')

<div class="card panel-default">

    <div class="card-header">
        Tags
    </div>
    <a href="{{ route('tag.create') }}" class="btn btn-sm btn-success">Cadastrar Tag +</a>
    <div class="card-body">
        <table class="table table-hover">

            <thead>
                <th>Tag Nome</th>
                <th>Editar</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @if($tags->count() > 0)
                    @foreach($tags as $tag)
                        <tr>
                            <td> {{ $tag->tag }} </td>
                            <td>
                                <a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">
                                    <span class="glyphicon glyphicon-pencil"></span>Edit
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('tag.delete', ['id' => $tag->id ] ) }}" class="btn btn-xs btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <th>
                        <th colspan="5" class="text-center">No tags yet.</th>
                    </th>
                @endif
            </tbody>
        </table>
    </div>
    
</div>


@stop