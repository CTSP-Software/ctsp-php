@extends("template.app")

@section("content")
    <!--Botoes no centro da tela-->
    <div class="container size">
        <div class="row vertical-align justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalCreateProject">
                Create Project
            </button>
            <div class="col-2"></div>
            <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#modalOpenProject">
                Open Project
            </button>
        </div>
    </div>

    <div id="modalCreateProject" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create Project</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Form code begins -->
                <form action="{{ route('project.store') }}" id="create_form" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group ">
                            <label class="control-label " for="name">Project Name</label>
                            <input class="form-control" id="name" name="name" type="text"/>
                        </div>
                        <!-- <div class="form-group ">
                            <label class="control-label " for="name">Project ID</label>
                            <input class="form-control" id="projectId" name="id" type="text"/>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label" for="date_begin_create">Date</label>
                            <div class="form-inline"> <!-- Date input -->
                                <input class="form-control" id="date_begin_create" name="started_date" placeholder="DD/MM/YYYY" type="text"/>
                                <label class="control-label m-3" for="date_end_create">to</label>
                                <input class="form-control" id="date_end_create" name="end_date" placeholder="DD/MM/YYYY" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit" form="create_form">Create</button>
                    </div>
                </form>
                <!-- Form code ends -->
            </div>
        </div>
    </div>

    <!--Formulario abrir projeto-->
    <div id="modalOpenProject" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Open Project</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Form code begins -->
                <form action="{{ route('project.show') }}" id="open_form" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Project Name</label>
                            <input class="form-control" name="name" placeholder="name" type="text" list="projects" required>
                            <label for="projects">
                                <datalist id="projects">
                                    <select class="form-control">
                                        @foreach($projects as $project)
                                            <option value="{{ $project->name }}"->{{ $project->id }}</option>
                                        @endforeach
                                    </select>
                                </datalist>
                            </label>
                        </div>
                        <!--<div class="form-group">
                            <label class="control-label" for="date_begin_open">Date</label>
                            <div class="form-inline">
                                <input class="form-control" id="date_begin_open" name="started_date" placeholder="DD/MM/YYYY" type="text"/>
                                <label class="control-label m-3" for="date_end_open">to</label>
                                <input class="form-control" id="date_end_open" name="end_date" placeholder="DD/MM/YYYY" type="text"/>
                            </div>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Open</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            var date_input1=$('input[name="started_date"]'); //our date input has the name "date"
            var date_input2=$('input[name="end_date"]');
            var container=$('.bootstrap form').length>0 ? $('.bootstrap form').parent() : "body";
            var options={
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input1.datepicker(options);
            date_input2.datepicker(options);
        })
    </script>
@endsection