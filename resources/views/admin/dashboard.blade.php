
@extends('layouts.app')


@section('content')
<br>
    <div class="row">
    

        <div class="col col-lg-3">
            
            <div class="card panel-info">

                <div class="card-header text-center bg-info">
                
                    POSTS
                
                </div>

                <div class="card-body">
                    <h1 class="text-center">{{$posts_count}}</h1>
                </div>

            </div>
        
        </div>

        <div class="col col-lg-3">
            
            <div class="card panel-danger">

                <div class="card-header text-center bg-danger">
                
                    LIXEIRA POSTS
                
                </div>

                <div class="card-body">
                    <h1 class="text-center">{{ $trashed_count }}</h1>
                </div>

            </div>
        
        </div>

        <div class="col col-lg-3">
            
            <div class="card panel-danger">

                <div class="card-header text-center bg-success">
                
                    USUÁRIOS
                
                </div>

                <div class="card-body">
                    <h1 class="text-center">{{ $users_count}}</h1>
                </div>

            </div>
        
        </div>

        <div class="col col-lg-3">
            
            <div class="card panel-danger">

                <div class="card-header text-center bg-info">
                
                    CATEGORIAS
                
                </div>

                <div class="card-body">
                    <h1 class="text-center">{{ $categories_count}}</h1>
                </div>

            </div>
        
        </div>

    </div>



@endsection

<!--@include('admin.includes.errors')-->


