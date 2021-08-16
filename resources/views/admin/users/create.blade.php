@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')
 
    <div class="card panel-default">
        <div class="card-header">
            Criar um novo usuario
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Usuario</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type='submit'>
                            add user
                        </button>
                    </div>
                </div>
             
            </form>
        </div>
    </div>

 @stop