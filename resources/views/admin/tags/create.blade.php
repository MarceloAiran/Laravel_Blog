@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')
 
    <div class="card panel-default">
        <div class="card-header">
            Criar uma nova Tag
        </div>
        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type='submit'>
                            salvar tag
                        </button>
                    </div>
                </div>
             
            </form>
        </div>
    </div>

 @stop