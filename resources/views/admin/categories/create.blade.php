@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')
 
    <div class="card panel-default">
        <div class="card-header">
            Criar uma nova categoria
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type='submit'>
                            salvar categoria
                        </button>
                    </div>
                </div>
             
            </form>
        </div>
    </div>

 @stop