@extends('template.app')

@section('content')
    <div class="col-md-12">
        <br>
        <h3>Novo Projeto</h3>
    </div>

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{ url('projects/store') }}" method="POST">
            {{ csrf_field() }}
            <br>
            <div class="form-group">
                <label class="control-label"></label>
                <input name="name" class="col-md-12 form-control" placeholder="nome">
            </div>

            <div class="form-group">
                <label class="control-label"></label>
                <input name="started_date" class="col-md-12 form-control" placeholder="Início">
            </div>

            <div class="form-group">
                <label class="control-label"></label>
                <input name="end_date" class="col-md-12 form-control" placeholder="Final">
            </div>
            <button style="float: right" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection