@extends('layouts.app')

@section('content')

<div class="card panel-default">

    <div class="card-header">
        Publicar posts
    </div>
    <a href="{{ route('post.create') }}" class="btn btn-sm btn-success">Postar +</a>
    <div class="card-body">
        <table class="table table-hover">

            <thead>
                <th>Imagem</th>
                <th>Título</th>
                <th>Editar</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                    <tr>
                        <td><img src="{{ $post->featured }}" alt="{{ $post->title}}" width="50px" height="50px"></td>
                        <td>{{ $post->title }}</td>
                        <td> <a href="{{ route('post.edit' , ['id' => $post->id]) }}" class="btn btn-xs btn-info">Editar</a></td>
                        <td> <a href="{{ route('post.delete' , ['id' => $post->id]) }}" class="btn btn-xs btn-danger">mover p/ lixeira</a> </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center"> No  posts</th>  
                    </tr>
                @endif    
            </tbody>
        </table>
    </div>    
</div>


@stop