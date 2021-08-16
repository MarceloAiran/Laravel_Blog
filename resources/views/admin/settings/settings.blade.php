@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')
 
    <div class="card panel-default">
        <div class="card-header">
            Editar configurações do Blog
        </div>
        <div class="card-body">
            <form action="{{ route('settings.update') }}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Site Nome</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Endereço</label>
                    <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
                </div>

                 <div class="form-group">
                    <label for="name">Contato</label>
                    <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
                </div>  

                 <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
                </div>

                 <div class="form-group">
                    <label for="name">Sobre o blog</label>
                    <textarea name="about" id="about" cols="5" rows="5" class="form-control">{{ $settings->about }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type='submit'>
                            atualizar site
                        </button>
                    </div>
                </div>
             
            </form>
        </div>
    </div>

 @stop