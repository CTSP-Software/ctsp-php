@extends('template.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Product Backlog</div>

                    <div class="panel-body">
                        <form id="perfil_form" method="post" enctype="multipart/form-data"> <!-- action="" -->
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group ">
                                    <label class="control-label " for="name">Priority</label>
                                    <select class="form-control" id="Select1">
                                        <option value="priority">Low</option>
                                        <option value="priority">Medium</option>
                                        <option value="priority">High</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="last">Type</label>
                                    <select class="form-control" id="Select2">
                                        <option value="type">Epic</option>
                                        <option value="type">Us</option>
                                        <option value="type">Theme</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="estimative">Estimative</label>
                                    <input class="form-control" name="estimative" type="text" value=""/>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="summary">Summary</label>
                                    <textarea id="summary" rows="5" cols="20" maxlength="500" class="form-control" name="summary" value="" required autofocus></textarea>
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