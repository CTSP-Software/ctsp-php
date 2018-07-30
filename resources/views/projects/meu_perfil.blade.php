@extends('template.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Meu Perfil</div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <form action="{{ route('perfil.update') }}" id="perfil_form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group ">
                                    <label class="control-label " for="name">Nome</label>
                                    <input class="form-control" name="name" type="text" value="{{ auth()->user()->name }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="last">Sobrenome</label>
                                    <input class="form-control" name="last" type="text" value="{{ auth()->user()->last }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="birth">Data de Nascimento</label>
                                    <input class="form-control" name="birth" type="text" value="{{ auth()->user()->birth }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="ability">Habilidades</label>
                                    <input class="form-control" name="ability" type="text" value="{{ auth()->user()->ability }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="tel">Telefone</label>
                                    <input class="form-control" name="tel" type="text" value="{{ auth()->user()->tel }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="email">E-mail</label>
                                    <input class="form-control" name="email" type="text" value="{{ auth()->user()->email }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="password">Password</label>
                                    <input class="form-control" name="password" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="image">Foto</label>
                                    <input name="image" type="file"/>

                                    @if(auth()->user()->image != null)
                                        <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 100px">
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="submit" form="perfil_form">Atualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection