@extends('layouts.app')

@section('content')

<div class="card panel-default">

    <div class="card-header">
        Lixeira
    </div>

    
    <table class="table table-hover">
        <thead>
            <th>Imagem</th>
            <th>Titúlo</th>
            <th>Restaurar</th>
            <th>Deletar</th>

        </thead>
        <tbody>

            @if($posts->count() > 0 )


                @foreach($posts as $post)
                <tr>
                    <td><img src="{{ $post->featured }}" alt="{{ $post->title}}" width="50px" height="50px"></td>
                    <td>{{ $post->title }}</td>
                    <td> <a href="{{ route('post.restore' , ['id' => $post->id]) }}" class="btn btn-xs btn-success">R</a> </td>
                    <td> <a href="{{ route('post.kill' , ['id' => $post->id]) }}" class="btn btn-xs btn-danger">D</a> </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center"> Não há posts na lixeira</th>  
                </tr>
            @endif
        </tbody>
    </table>
    
    
</div>    


@stop