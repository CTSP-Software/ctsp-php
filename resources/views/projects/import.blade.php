@extends('template.app')

@section('content')
    <div class="size">
        <div class="container mt-5">
            <form action="{{ route('project.show') }}" method="post">
                <div class="form-group row">
                    <label for="inputNameProject" class="col-2 col-form-label">Scrum Project Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{ $resultado->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputIdProject" class="col-2 col-form-label">Scrum Project ID</label>
                    <div class="col-10">
                        <input input class="form-control" type="text" value="{{ $resultado->id }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col row">
                        <label for="dataInicio" class="col-4 col-form-label">Star Date</label>
                        <div class="col-8">
                            <input input class="form-control" type="text" value="{{ $resultado->started_date }}">
                        </div>
                    </div>
                    <div class="form-group col row">
                        <label for="dataFim" class="col-4 col-form-label">End Date</label>
                        <div class="col-8">
                            <input class="form-control" type="text" value="{{ $resultado->end_date }}">
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <!--BUTTON LINK-->
                    <a class="btn btn-outline-primary col-2 col-sm-2" href="/projects" role="button">Back</a>
                    <!--COLUNA PARA ESPACO-->
                    <!--<div class="col"></div>-->
                    <!--BUTTON-->
                    <!--<button type="submit" class="btn btn-primary col-2 col-sm-2">Import</button> -->
                    <!--COLUNA PARA ESPACO-->
                    <!--<div class="col"></div>-->
                    <!--BUTTON LINK-->
                    <!--<a class="btn btn-outline-primary col-2 col-sm-2" href="/projects" role="button">Cancel</a>-->
                </div>
            </form>

        </div>
    </div>
@endsection