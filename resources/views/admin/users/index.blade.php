@extends('layouts.app')

@section('content')

<div class="card panel-default">

    <div class="card-header">
        Usuários
    </div>
    <a href="{{ route('user.create') }}" class="btn btn-sm btn-success">Cadastrar Usuário +</a>
    <br/>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Permissão</th>
                <th>Deletar</th>
            </thead>
            <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                    <tr>
                            <td>
                                <img src="{{ asset($user->profile->avatar) }}" alt="" width="60px" heidht="60px" style="border-radius: 50%;">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>
                                @if($user->admin)
                                         <a href="{{ route('user.not.admin' , ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remover Permissão</a>
                                @else
                                        <a href="{{ route('user.admin' , ['id' => $user->id]) }}" class="btn btn-xs btn-success">Tornar Admin</a>
                                @endif
                            
                            
                            
                            </td>
                            <td>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{ route('user.delete' , ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                @endif
                            </td>
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