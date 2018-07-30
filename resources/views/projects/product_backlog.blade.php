@extends('template.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Product Backlog</div>

                    <div class="panel-body">
                        <form action="{{ route('pb.store', ['id' => $resultado2]) }}" id="perfil_form" method="post" enctype="multipart/form-data"> <!-- action="" -->
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group ">
                                    <label class="control-label " for="project_id">Project Id</label>
                                    <input class="form-control" name="project_id" type="text" value="{{ $resultado2 }}"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="priority">Priority:</label>
                                    <br>
                                    <form>
                                        <input type="radio" name="priority" value="Low" checked> Low<br>
                                        <input type="radio" name="priority" value="Medium"> Medium<br>
                                        <input type="radio" name="priority" value="High"> High
                                    </form>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="type">Type (Epic, Us, Theme)</label>
                                    <input class="form-control" id="type" name="type" type="text"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="estimative">Estimative</label>
                                    <input class="form-control" id="estimative" name="estimative" type="text"/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="summary">Summary</label>
                                    <textarea id="summary" rows="5" cols="20" maxlength="500" class="form-control" name="summary"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="submit" form="perfil_form">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection